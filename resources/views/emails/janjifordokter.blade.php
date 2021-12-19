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
    <h2 style="text-align: center;margin-top: 10px;font-family: 'Poppins', sans-serif;"> Hallo Pasien yang ingin membuat Janji dengan Kamu </h2>
    <h3 style="font-family: 'Poppins', sans-serif;"> Yth. Bapak / Ibu Dokter {{$dataDokter->fullname}}</h3>

    <h4 style="margin-top: 20px;font-family: 'Poppins', sans-serif;"> Berikut merupakan detail jadwal konsultasi paseien yang diajukan : </h4>
    <table style="font-family: 'Poppins', sans-serif;">
        <tr>
            <td width="200px" style="font-family: 'Poppins',sans-serif"> Nama Pasien </td>
            <td width="300px" style="font-family: 'Poppins',sans-serif"> <STRONG> {{$data['nama']}}</STRONG></td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Spesialisai </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong>  {{$dataPoliklinik->nama}}</td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Rumah Sakit </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong> {{$dataRumahSakit->nama}}</strong></td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Alamat Rumah Sakit </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong> {{$dataRumahSakit->alamat}}</strong></td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Tanggal </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong> {{ date('D d M Y',strtotime($data['tanggal_janji'])) }} </strong></td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Waktu Konsultan </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong> {{$data['jam_janji']}}</strong></td>
        </tr>
        <tr>
            <td style="font-family: 'Poppins',sans-serif"> Status </td>
            <td style="font-family: 'Poppins',sans-serif"> <strong> {{$data['status']}}</strong></td>
        </tr>
    </table>


    <div style="text-align: center;margin: auto;width: 80%;margin-top: 25px;margin-bottom: 10px;">
        <a style="background-color: mediumslateblue; padding: 10px; font-family: 'Poppins',sans-serif;border-radius: 8px;color: white;text-decoration: none" href="{{route('janji-dokter.index')}}"> Terima Jadwal Pasien  </a>
    </div>
    <h4 style="font-family: 'Poppins', sans-serif;margin-top: 25px"> Setelah klik tombol tersebut, Anda akan di arahkan ke halaman dashboard Anda (sebagai Dokter) </h4>
    <h4 style="font-family: 'Poppins', sans-serif;"> * Harap Segera Mengkonfirmasi Jadwal yang pasien ajukan didalam aplikasi SEHATKUAPP </h4>

    <h4 style="margin-top: 20px;font-family: 'Poppins',sans-serif;"> Salam Hangat</h4>
    <br>
    <br>
    <br>
    <h4 style="margin-top: 20px;font-family: 'Poppins',sans-serif;"> SEHATKUAPP</h4>
</body>
</html>
