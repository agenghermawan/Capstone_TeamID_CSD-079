<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatku</title>
    @include('frontend.component.style')
    @yield('opsionalCss')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.tiny.cloud/1/tmrao508v4qd0k76bb3ztge1vkvrlu25nec5c1fzm5tftz7y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>
</head>

<body style="background-color: #f6f8fd">

    @include('frontend.component.header')
    @yield('contentFrontEnd')
    @include('frontend.component.footer')

    @include('frontend.component.script')
    @yield('opsionalJs')
</body>

</html>
