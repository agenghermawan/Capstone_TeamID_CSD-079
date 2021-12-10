<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatku</title>
    @include('frontend.component.style')
    @yield('opsionalCss')
</head>

<body>

    @include('frontend.component.header')
    @yield('contentFrontEnd')
    @include('frontend.component.footer')

    @include('frontend.component.script')
    @yield('opsionalJs')
</body>

</html>
