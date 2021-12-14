<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatku</title>
    @include('frontend.component.style')
    @yield('opsionalCss')
    <script src="https://cdn.tiny.cloud/1/tmrao508v4qd0k76bb3ztge1vkvrlu25nec5c1fzm5tftz7y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>
</head>

<body>

    @include('frontend.component.header')
    @yield('contentFrontEnd')
    @include('frontend.component.footer')

    @include('frontend.component.script')
    @yield('opsionalJs')
</body>

</html>
