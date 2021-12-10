@extends('frontend.component.layout')

@section('contentFrontEnd')
    <main>
        <img src="https://d2qjkwm11akmwu.cloudfront.net/products/79460_22-9-2021_10-26-40.webp" alt="">
        <div class="detail-drugs-container">
            <h1>Sterimar Nose Hygiene and Comfort 50 ml</h1>
            <p><b>Rp.149000 - 199000</b> Per Botol</p>
            <p>*Harga berbeda di tiap apotik</p>

            <div class="info category">
                <h2>Kategori</h2>
                <p>Batuk dan Flu, COVID-19</p>
            </div>

            <div class="info description">
                <h2>Deskripsi</h2>
                <p>STERIMAR NOSE HYGIENE AND COMFORT sediaan pencuci hidung yang dikembangkan dengan kandungan trance
                    element air laut dan zinc oleh para ahli kesehatan THT dan spesialis anak. STERIMAR efektif mencegah dan
                    mengobati masalah hidung yang terkait dengan alergi dan hidung tersumbat.</p>
            </div>

            <div class="info indication">
                <h2>Indikasi Umum</h2>
                <p>Membantu mengembalikan kelembapan alami dari hidung, dan membersihkan hidung dari sekresi hingus dan
                    kotoran</p>
            </div>

            <div class="info composition">
                <h2>Komposisi</h2>
                <p>Sea water 31.82 mL, purified water qsp 100 mL</p>
            </div>

            <div class="info dose">
                <h2>Dosis</h2>
                <p>2-6 kali semprotan per hari tiap lubang hidung (atau lebih jika diperlukan). Disarankan untuk penggunaan
                    sebelum tidur atau membersihkan hidung sehari-hari</p>
            </div>

            <div class="info how-to-use">
                <h2>Aturan Pakai</h2>
                <p>Semprotkan pada tiap lubang hidung. Lama penyemprotan 1-2 detik. Bersihkan nosel dengan air hangat
                    setelah digunakan dan keringkan.</p>
            </div>

            <div class="info manufacture">
                <h2>Manufaktur</h2>
                <p>Church & Dwight UK Limited</p>
            </div>

            <div class="info registration-number">
                <h2>No. Registrasi</h2>
                <p>Kemenkes RI: AKL20704915762</p>
            </div>
        </div>
        <aside>
            <h1>Rekomendasi Obat lain</h1>
            <div class="card-recommendation-container">
                <div class="card-recommendation">
                    <img src="https://d2qjkwm11akmwu.cloudfront.net/products/97696_22-9-2021_10-51-58.webp" alt="">
                    <h2>Rhinos SR 10 Kapsul</h2>
                    <p>Rp.200000</p>
                    <button>Detail</button>
                </div>
                <div class="card-recommendation">
                    <img src="https://d2qjkwm11akmwu.cloudfront.net/products/97696_22-9-2021_10-51-58.webp" alt="">
                    <h2>Rhinos SR 10 Kapsul</h2>
                    <p>Rp.200000</p>
                    <button>Detail</button>
                </div>
                <div class="card-recommendation">
                    <img src="https://d2qjkwm11akmwu.cloudfront.net/products/97696_22-9-2021_10-51-58.webp" alt="">
                    <h2>Rhinos SR 10 Kapsul</h2>
                    <p>Rp.200000</p>
                    <button>Detail</button>
                </div>
                <div class="card-recommendation">
                    <img src="https://d2qjkwm11akmwu.cloudfront.net/products/97696_22-9-2021_10-51-58.webp" alt="">
                    <h2>Rhinos SR 10 Kapsul</h2>
                    <p>Rp.200000</p>
                    <button>Detail</button>
                </div>
            </div>
        </aside>
    </main>
@endsection

@section('opsionalCss')
    <style>
        main {
            padding: 5%;
            display: flex;
        }

        main img {
            max-width: 100%;
            width: 20%;
            height: fit-content;
            margin: 0 5%;
        }

        .detail-drugs-container {
            width: 45%;
            height: auto;
            color: #2c4964;
        }

        .detail-drugs-container>h1 {
            font-size: 3em;
            margin-bottom: 5%;
        }

        .detail-drugs-container>p:first-of-type {
            font-size: 2em;
            margin-bottom: 1%;
        }

        .detail-drugs-container>p:last-of-type {
            margin-bottom: 10%;
        }

        .info {
            margin: 2.5% 0;
            padding-bottom: 2.5%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .info h2 {
            font-size: 2em;
            margin-bottom: 2%;
        }

        .info p {
            font-size: 1.5em;
            line-height: 175%;
        }

        aside {
            width: 25%;
            height: auto;
            padding: 0 2.5%;
        }

        aside h1 {
            text-align: center;
            color: #2c4964;
            margin-bottom: 5%;
        }

        .card-recommendation-container {
            display: flex;
            flex-direction: column;
        }

        .card-recommendation {
            width: 90%;
            height: auto;
            box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2);
            /* border-bottom: 1px solid rgba(0, 0, 0, 0.2); */
            color: #2c4964;
            padding: 10% 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 5%;
            border-radius: 5px;
        }

        .card-recommendation>img {
            width: 40%;
        }

        .card-recommendation>h2 {
            margin: 5% 0;
        }

        .card-recommendation p {
            margin-bottom: 5%;
        }

        .card-recommendation>button {
            width: 60%;
            padding: 2% 0;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 2.5px;
            cursor: pointer;
        }

        .card-recommendation>button:hover {
            background-color: #2c4964;
            color: #fff;
        }

    </style>
@endsection
