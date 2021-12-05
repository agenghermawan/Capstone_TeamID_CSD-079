@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="bg-white p-10 gap-5 grid grid-rows-1 shadow-md text-justify overflow-auto">
        <div class="header col-span-1 grid gap-2 col-rows-1">
            <h4 class="font-bold text-xl text-blue-400">
                Ablasi Retina
            </h4>
            <h5 class="mt-2">
                Ablasi retina adalah penyakit mata akibat lepasnya lapisan tipis di dalam mata yang disebut retina. Kondisi
                ini tergolong darurat dan dapat menyebabkan kebutaan permanen jika tidak segera ditangani.
            </h5>
            <p>Retina mata merupakan bagian penting yang berfungsi memproses cahaya yang ditangkap oleh mata. Setelah
                ditangkap, cahaya tersebut diubah menjadi sinyal listrik dan diteruskan ke otak. Sinyal ini kemudian
                diproses di dalam otak dan diinterpretasikan sebagai gambar yang dilihat oleh mata.
        </div>
        <div class="image bg-clip-content md:flex">
            <div class="md:flex-shrink-0">
                <img src="{{ asset('image/ademsari.jpg') }}" class="rounded flex-initial md:h-64" alt="">
            </div>
            <div class="produk md:p-5 md:ml-2">
                <h5 class="font-bold mb-5">
                    Gejala Ablasi Retina
                </h5>
                <p>
                    Ablasi retina atau ablasio retina tidak menimbulkan rasa sakit. Hilangnya penglihatan dapat terjadi
                    secara tiba-tiba, atau didahului sejumlah gejala di bawah ini:
                </p>
                <ul class="list-outside bg-rose-200 list-disc tracking-tighter">
                    <li>Muncul bercak hitam yang tampak melayang di dalam penglihatan (floaters).</li>
                    <li>Penglihatan kabur atau tertutup oleh bayangan seperti tirai.</li>
                    <li>Kilatan cahaya pada penglihatan (fotopsia).</li>
                </ul>
            </div>
        </div>




        <div class="warning grid gap-2">
            <h5 class="font-bold"> Penyebab Ablasi Retina : </h5>
            <p>
                Ablasi retina terjadi ketika retina mata terlepas dari pembuluh darah yang menyalurkan oksigen dan nutrisi.
                Berikut ini adalah 3 kondisi yang dapat menyebabkan retina terlepas:
            </p>
            <ul class="list-disc list-inside">
                <li>
                    Terdapat robekan kecil di dalam retina. Robekan ini membuat cairan di bagian tengah bola mata (cairan
                    vitreus) merembes masuk dan menumpuk di belakang retina. Cairan yang menumpuk akan membuat seluruh
                    lapisan retina terlepas dari dasarnya. Pada umumnya, robekan pada retina mata terjadi akibat berubahnya
                    jaringan seiring pertambahan usia. Orang dengan mata minus (rabun jauh) atau pernah menjalani operasi
                    katarak juga berisiko mengalami robekan pada retina. </li>
                <li>
                    Menumpuknya cairan vitreus tanpa disertai robekan pada retina. Kondisi ini dapat disebabkan oleh cedera,
                    tumor, peradangan, dan penyakit degenerasi makula.
                </li>
                <li>
                    Terbentuk jaringan parut di permukaan retina. Kondisi ini membuat retina tertarik dan lepas. Kondisi ini
                    lebih sering dijumpai pada penderita diabetes dengan gula darah yang tidak terkontrol dengan baik.
                </li>
            </ul>
        </div>

        <div class="dosis grid gap-2">
            <h5 class="font-bold"> Faktor Risiko Ablasi Retina </h5>
            <p>
                Terdapat sejumlah faktor yang meningkatkan risiko seseorang terserang ablasi retina, antara lain:
            </p>
            <ul class="list-disc list-inside">
                <li>
                    Berusia di atas 50 tahun. </li>
                <li>
                    Sudah pernah mengalami ablasi retina.
                </li>
                <li>
                    Memiliki anggota keluarga dengan penyakit yang sama.
                </li>
                <li>
                    Pernah mengalami cedera parah pada mata.
                </li>
            </ul>
        </div>



        <div class="interaksi grid gap-2">
            <h5 class="font-bold"> Diagnosis Ablasi Retina : </h5>
            <p> Untuk menentukan diagnosis ablasi retina, dokter mata atau dokter mata ahli vitreo-retina akan melakukan
                pemeriksaan oftalmoskopi dengan alat khusus untuk untuk melihat bagian dalam mata. Jika oftalmoskopi tidak
                dapat mengamati kondisi retina dengan jelas, misalnya akibat perdarahan di mata, dokter akan melakukan USG
                mata. </p>
        </div>

        <div class="efek">
            <h5 class="font-bold"> Pengobatan Ablasi Retina : </h5>
            <p> Pengobatan terhadap ablasi retina berbeda-beda, tergantung kondisi pasien. Jika retina robek atau berlubang
                namun belum sampai terlepas, dokter mata dapat menerapkan beberapa tindakan di bawah ini untuk memperbaiki
                penglihatan dan mencegah retina terlepas: </p>
            <ul class="list-disc list-inside">
                <li>
                    Kriopeksi. Prosedur ini dilakukan dengan cara membekukan robekan di retina, agar retina tetap menempel
                    pada dinding mata. </li>
                <li>
                    Terapi laser (fotokoagulasi). Sinar laser akan membakar jaringan di sekitar robekan retina. Laser juga
                    akan membantu retina tetap menempel.
                </li>
            </ul>

        </div>
        <div class="efek">
            <h5 class="font-bold"> Pencegahan Ablasi Retina : </h5>
            <p> Ablasi retina tidak selalu dapat dicegah. Namun demikian, risiko terjadinya ablasi retina dapat dikurangi
                melalui beberapa langkah berikut ini: </p>
            <ul class="list-disc list-inside">
                <li>
                    Segera periksa ke dokter mata apabila muncul floaters, kilatan cahaya, atau terdapat perubahan apa pun
                    pada lapang pandang.
                </li>
                <li>
                    Rutin memeriksakan mata minimal satu kali setiap tahun. Pemeriksaan harus dilakukan lebih sering jika
                    menderita diabetes.
                </li>
                <li>
                    Rutin mengontrol kadar gula dan tekanan darah, agar kondisi pembuluh darah retina tetap sehat.
                </li>
                <li>
                    Gunakan pelindung mata saat berolahraga atau saat melakukan aktivitas yang berisiko mencederai mata.
                </li>
            </ul>
        </div>


    </div>

@endsection
