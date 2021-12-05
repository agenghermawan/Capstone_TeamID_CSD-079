@extends('layouts.app')

@section('css')

@endsection

@section('content')
        <div class="bg-white p-10 gap-5 grid grid-rows-1 shadow-md text-justify overflow-auto">
            <div class="header col-span-1 grid gap-2 col-rows-1">
                <h4 class="font-bold text-xl text-blue-400"> Adem Sari </h4>
                <h5 class="mt-2">
                    Adem Sari bermanfaat untuk meredakan gejala panas dalam, seperti sariawan, sakit tenggorokan, dan susah buang air besar. Selain itu, produk ini juga dipercaya dapat membantu meredakan gejala flu.
                    Di dalam pengobatan tradisional, panas dalam diartikan sebagai kumpulan keluhan yang terjadi akibat terlalu sering mengonsumsi jenis makanan tertentu, seperti makanan pedas atau makanan yang diolah dengan suhu tinggi, seperti daging bakar dan gorengan.

                </h5>
                <p>Di dalam pengobatan tradisional, panas dalam diartikan sebagai kumpulan keluhan yang terjadi akibat terlalu sering mengonsumsi jenis makanan tertentu, seperti makanan pedas atau makanan yang diolah dengan suhu tinggi, seperti daging bakar dan gorengan.</p>
                Adem sari mengandung ekstrak jeruk nipis, pulosari, dan kayu manis, yang dipercaya mampu meredakan keluhan dan gejala panas dalam. Selain itu, di dalam Adem Sari juga terkandung vitamin C yang diketahui baik untuk kesehatan.
            </div>
            <div class="image bg-clip-content md:flex">
                <div class="md:flex-shrink-0">
                  <img src="{{asset('image/ademsari.jpg')}}" class="rounded flex-initial md:h-64" alt="">
                </div>
                <div class="produk md:p-5 md:ml-2">
                    <h5 class="font-bold mb-5">
                        Produk Adem Sari
                        Terdapat dua produk Adem Sari yang tersedia di Indonesia, yaitu:
                    </h5>
                    <ul class="list-outside bg-rose-200 list-disc tracking-tighter">
                        <li>Adem Sari mengandung bahan aktif ekstrak jeruk nipis, kayu manis, pulosari serta vitamin C. Adem Sari dikemas dalam bentuk saset berisi serbuk untuk dilarutkan</li>
                        <li>Selain mengandung ekstrak jeruk nipis, kayu manis, dan pulosari, Adem Sari Ching Ku juga mengandung sari liang teh, serta sari mentimun dan markisa untuk menghilangkan rasa pahit serta memberikan kesegaran ketika diminum. Adem Sari Ching Ku dikemas dalam botol plastik dan kemasan kaleng</li>
                    </ul>
                    <p class="mt-2 "> Selain itu, terdapat juga Air Sejuk Adem Sari yang mengandung mineral, seperti kalium, natrium, kalsium, dan magnesium. Produk ini diyakini mampu memberikan sensasi rasa dingin. </p>
                </div>
            </div>




            <div class="warning grid gap-2">
                <h5 class="font-bold">  Peringatan Sebelum Mengonsumsi Adem Sari : </h5>
                <ul class="list-disc list-inside">
                    <li>
                        Jangan mengonsumsi Adem Sari jika Anda alergi terhadap kandungan yang ada di dalam produk ini.
                    </li>
                    <li>
                        Hati-hati mengonsumsi Adem Sari jika Anda menderita sakit maag.
                    </li>
                    <li>
                        Adem Sari mengandung pemanis buatan aspartam. Jangan mengonsumsi produk yang mengandung aspartame jika Anda menderita fenilketonuria.
                    </li>
                    <li>
                        Adem Sari mengandung vitamin C. Konsultasikan prihal konsumsi vitamin C jika Anda menderita batu ginjal, G6PD (defisiensi glucose-6-phosphate dehydrogenase), atau pernah mengalami hemokromatosis.
                    </li>

                </ul>
            </div>

            <div class="dosis grid gap-2">
                <h5 class="font-bold">  Dosis dan Aturan Pakai Adem Sari </h5>
                <p> Untuk orang dewasa, Adem Sari sebaiknya dikonsumsi sebanyak 1 bungkus, 2–3 kali sehari. Untuk anak-anak, Adem Sari sebaiknya dikonsumsi sebanyak  ½ bungkus, 2–3 kali sehari. Jangan mengonsumsi 2 bungkus Adem Sari sekaligus, karena dapat meningkatkan risiko terjadinya sakit perut. </p>
            </div>


            <div class="interaksi grid gap-2">
                <h5 class="font-bold">  Interaksi Adem Sari dengan Obat Lain </h5>
                <p> Belum diketahui interaksi antarobat yang bisa terjadi jika Adem Sari digunakan bersama obat, suplemen, atau produk herbal lain. Jika Anda ragu, konsultasikan dengan dokter perihal penggunaan Adem Sari jika Anda sedang menjalani pengobatan dengan suplemen, produk herbal, atau obat tertentu. </p>
            </div>

            <div class="efek">
                <h5 class="font-bold"> Efek Samping dan Bahaya Adem Sari </h5>
                <p> Jika dikonsumsi sesuai aturan pakai, Adem Sari jarang menyebabkan efek samping. Namun, vitamin C yang terkandung di dalam Adem Sari jika dikonsumsi secara berlebihan dapat menyebabkan sakit perut, kembung, sensasi rasa panas (heartburn), mual, atau sakit kepala.

                    Lakukan pemeriksaan ke dokter jika efek samping tersebut tidak kunjung mereda atau semakin memberat. Selain itu, Anda harus segera ke dokter jika mengalami reaksi alergi setelah mengonsumsi Adem Sari. </p>

            </div>

            <div class="kategori space-6-2">
                <div class="Golongan border-b py-2">
                    <h4 class="font-bold"> Golongan </h4>
                    <p class="text-sm text-blue-700"> Obat Keras </p>
                </div>
                <div class="Deskripsi border-b py-2">
                    <h4 class="font-bold"> Golongan </h4>
                    <p class="text-sm text-blue-700"> Obat Keras </p>
                </div>
                <div class="golongan border-b py-2">
                    <h4> Golongan </h4>
                    <p class="text-sm text-blue-700"> Obat Keras </p>
                </div>
            </div>

    </div>

@endsection
