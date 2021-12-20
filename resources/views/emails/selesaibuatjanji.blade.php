<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<body style="padding-left: 20%;padding-right: 20%;font-family: 'Poppins', sans-serif;">

<h1 style="text-align: center;font-size: 32px;font-family: 'Poppins', sans-serif;margin-top: 10px;color: #0b5ed7"> SEHATKUAPP </h1>
<div style="margin: auto;width: 80%;text-align: center">
    <img src="{{asset('image/kisspng-physician-fotolia-doctor-of-medicine-doctors-and-nurses-5ab5d9e27dafc1.4044242415218672345148.png')}}" width="200px" height="200px" alt="">
</div>
<div class="container" style="border-top: 2px solid blue">
    <div style="text-align: center;margin: auto;width: 80%;margin-top: 25px;margin-bottom: 10px;">
    </div>
    <h4 style="margin-top: 20px;font-family: 'Poppins', sans-serif;"> Yth. Bapak / Ibu {{$data->nama}} </h4>

    <h4 style="margin-top: 20px;font-family: 'Poppins', sans-serif;"> Terima kasih telah menggunakan Aplikasi SEHATKUAPP untuk mempermudah kamu bertemu dokter yang kamu inginkan </h4>

    <a style="background-color: red; padding: 10px; font-family: 'Poppins',sans-serif;border-radius: 8px;color: white;text-decoration: none" href="{{route('user.index')}}"> Ingin Konsultasi kembali , Klik Disini  </strong> </a>

    <h4 style="margin-top: 20px;font-family: 'Poppins',sans-serif;"> Salam Hangat</h4>
    <br>
    <br>
    <br>
    <h4 style="margin-top: 20px;font-family: 'Poppins',sans-serif;"> SEHATKUAPP</h4>
</body>
</html>
