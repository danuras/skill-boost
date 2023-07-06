<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KCXQGF2Q3H"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KCXQGF2Q3H');
    </script>

    <title>SkillBoost</title>
</head>

<body id="home">
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="#home">
                <img src="{{ asset('logo.png') }}" alt="logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-3">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link active" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link active" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link active" href="#go-kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <button id="btn-auth">
                            <a class="nav-link auth" href="#">Masuk</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="btn-auth">
                            <a class="nav-link auth" href="#">Daftar</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav end --}}

    {{-- hero --}}
    <section id="hero">
        <div class="container-fluid">
            <div id="diskon" class="row pt-2">
                <div class="col-md text-center">
                    <p class="align-text-bottom">Gabung bersama kami sekarang. <a href="">Dapatkan 90% diskon
                            pengguna baru</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p id="headline">
                        KUASAI SKILL YANG DIBUTUHKAN UNTUK SUKSES DI ERA DIGITAL
                    </p>
                    <p id="copywriting">
                        COBA KURSUS DAN PELAJARI SKILL YANG ANDA BUTUHKAN SEKARANG JUGA
                    </p>
                    <button id="btn-call">
                        <a href="">Mulai Sekarang</a>
                    </button>
                </div>
                <div class="col-md-4 pt-5">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
                        data-bs-pause="false">
                        <div class="carousel-inner c-inner">
                            <div class="carousel-item active c-item">
                                <img src="{{ asset('assets/python.png') }}" class="d-block w-100 c-img" alt="">
                            </div>
                            <div class="carousel-item c-item">
                                <img src="{{ asset('assets/dart.png') }}" class="d-block w-100 c-img" alt="">
                            </div>
                            <div class="carousel-item c-item">
                                <img src="{{ asset('assets/php.png') }}" class="d-block w-100 c-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9197ae" fill-opacity="1"
                d="M0,160L40,176C80,192,160,224,240,208C320,192,400,128,480,96C560,64,640,64,720,85.3C800,107,880,149,960,176C1040,203,1120,213,1200,192C1280,171,1360,117,1400,90.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- hero end --}}

    {{-- layanan --}}
    <section id="layanan">
        <div class="container">
            <div class="row text-center">
                <div class="col pt-5">
                    <h2 class="text-light">Layanan</h2>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <div class="col-md-6">
                    <p class="text-light">Pelatihan skill yang bisa digunakan oleh seluruh pelajar agar mereka mendapatkan skill yang relevan bagi dunia kerja.</p>
                </div>
                <div class="col-md-6">
                    <p class="text-light">Training skill bagi karyawan perusahaan.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- layanan end --}}

    {{-- testimoni --}}
    <section id="testimoni" class="ps-2 pe-2">
        <div id="inner-testimoni" class="pt-5 pb-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col mb-3 pt-3">
                        <h2>Alasan Mereka Memilih Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center pb-5">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('assets/black.png') }}" alt="foto"
                                        width="100px">
                                    <h5 class="card-title mt-2">Nama</h5>
                                </div>
                                <i class="fa-sharp fa-solid fa-quote-left"></i>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="text-end">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('assets/black.png') }}" alt="foto"
                                        width="100px">
                                    <h5 class="card-title mt-2">Nama</h5>
                                </div>
                                <i class="fa-sharp fa-solid fa-quote-left"></i>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                    odit
                                    itaque sunt unde placeat odio asperiores dolorum incidunt? Mollitia labore aut ex
                                    dignissimos, provident libero voluptas nemo esse quo voluptatum.</p>
                                <div class="text-end">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('assets/black.png') }}" alt="foto"
                                        width="100px">
                                    <h5 class="card-title mt-2">Nama</h5>
                                </div>
                                <i class="fa-sharp fa-solid fa-quote-left"></i>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="text-end">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimoni end --}}

    {{-- kontak --}}
    <section id="kontak">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9197ae" fill-opacity="1"
                d="M0,192L40,165.3C80,139,160,85,240,85.3C320,85,400,139,480,181.3C560,224,640,256,720,266.7C800,277,880,267,960,229.3C1040,192,1120,128,1200,106.7C1280,85,1360,107,1400,117.3L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 id="go-kontak" class="pt-5">Kontak</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p class="fw-bold">Alamat</p>
                    <p class="pe-5">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah
                        Istimewa
                        Yogyakarta 55281</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2676.8762132211687!2d110.40831711038518!3d-7.759991490355127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1686623305217!5m2!1sid!2sid"
                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md pb-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="msg" class="form-label">Pesan</label>
                            <textarea class="form-control" id="msg" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- kontak end --}}

    <!-- footer -->
    <footer class="text-white pb-3">
        <p class="text-center fw-bold pt-4">© 2023 SkillBoost</p>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
