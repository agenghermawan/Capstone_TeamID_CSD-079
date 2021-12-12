@extends('layouts.app')

@section('css')


@endsection
@section('content')
    @include('sweetalert::alert')
    <div class=" mt-4 grid grid-cols-1 md:grid-cols-2 lg:flex justify-between">
        <h4> Form Artikel </h4>
        <a href="{{ route('artikel.index') }}" class="bg-blue-500 p-3 shadow-2xl rounded"> Daftar Artikel</a>
    </div>
    <form action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 lg:gap-4">
            <div class="content-form-article sm:col-span-2 col-span-1 bg-white p-5 text-sm text-gray-700 rounded-md">
                @if (session('message'))
                    <div class="bg-white">
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                @endif
                <div class="form-group lg:p-5">
                    <label for="title" class="block text-sm text-gray-700"> Title </label>
                    <input type="text" name="title"
                        class="bg-white p-3 w-full rounded-lg text-gray-700 text-sm border-gray-300 ">
                </div>
                <div class="form-group lg:p-5">
                    <p class="mb-2"> Isi Artikel </p>
                    <textarea name="isiArtikel" id="editor" style="height: 400px" class="rounded" rows="10"></textarea>
                </div>
                <div class="form-group xl:p-5">
                    <label class="inline-block mb-2 text-gray-500" for="photo">File Upload</label>
                    <label
                        class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                Attach a file</p>
                        </div>
                        <input type="file" name="photo" class="opacity-20" />
                    </label>
                </div>
            </div>
            <div class="col-span-2 bg-white p-10 mt-5 lg:mt-0 rounded-md" style="height: 350px">
                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Ditulis :</label>
                    <input type="text" name="ditulisOleh" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="{{ Auth::user()->name }}" placeholder="Ditulis Oleh">
                </div>

                <div class="form-group my-2">
                    <label for="" class="text-gray-700 text-sm"> Kategori :</label>
                    <input type="text" name="kategori" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="" placeholder="Kategori">
                </div>
                <div class="form-group mt-2">
                    <label for="" class="text-gray-700 text-sm"> Refrensi :</label>
                    <input type="text" name="refrensi" class="w-full  text-gray-700 text-sm border-gray-300 rounded mt-2"
                        value="" placeholder="Refrensi">
                </div>
                <button type="submit" class="rounded  bg-gradient-to-r my-4 p-3 shadow-2xl bg-blue-300 text-sm"> Submit
                </button>
            </div>
        </div>
    </form>


@endsection
@section('script')
    <script>
        class MyUploadAdapter {
            constructor(loader) {
                // The file loader instance to use during the upload.
                this.loader = loader;
            }

            // Starts the upload process.
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            // Aborts the upload process.
            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            // Initializes the XMLHttpRequest object using the URL passed to the constructor.
            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();

                // Note that your request may look different. It is up to you and your editor
                // integration to choose the right communication channel. This example uses
                // a POST request with JSON as a data structure but your configuration
                // could be different.
                xhr.open('POST', '{{ route('image_upload') }}', true);
                xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                xhr.responseType = 'json';
            }

            // Initializes XMLHttpRequest listeners.
            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    // This example assumes the XHR server's "response" object will come with
                    // an "error" which has its own "message" that can be passed to reject()
                    // in the upload promise.
                    //
                    // Your integration may handle upload errors in a different way so make sure
                    // it is done properly. The reject() function must be called when the upload fails.
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    // If the upload is successful, resolve the upload promise with an object containing
                    // at least the "default" URL, pointing to the image on the server.
                    // This URL will be used to display the image in the content. Learn more in the
                    // UploadAdapter#upload documentation.
                    resolve({
                        default: response.url
                    });
                });

                // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                // properties which are used e.g. to display the upload progress bar in the editor
                // user interface.
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            // Prepares the data and sends the request.
            _sendRequest(file) {
                // Prepare the form data.
                const data = new FormData();

                data.append('upload', file);

                // Important note: This is the right place to implement security mechanisms
                // like authentication and CSRF protection. For instance, you can use
                // XMLHttpRequest.setRequestHeader() to set the request headers containing
                // the CSRF token generated earlier by your application.

                // Send the request.
                this.xhr.send(data);
            }
        }

        // ...

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                // Configure the URL to the upload script in your back-end here!
                return new MyUploadAdapter(loader);
            };
        }

        // ...

        ClassicEditor
            .create(document.querySelector('#editor'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
            })
            .catch(error => {
                console.log(error);
            });
    </script>
@endsection
