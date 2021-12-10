<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@include('sweetalert::alert')
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .searchbar {
        padding: 5%;
        padding-bottom: 0;
        display: flex;
    }

    .drugs-page-container {
        padding: 5%;
        padding-top: 2.5%;
        color: #2c4964;
    }

    .drugs-page-container h2 {
        font-size: 3em;
        margin-bottom: 2.5%;
    }

    .searchbar input {
        width: 95%;
        height: 50px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        padding-left: 15px;
    }

    .searchbar button {
        width: 5%;
        height: 50px;
    }

</style>
