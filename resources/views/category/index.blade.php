<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <title>Siswoyo Lele</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/lele.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="#">Siswoyo<span style="color: #F8BC38;">Lele</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li><a class="nav-link" href="#about">About us</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#benefit">Benefit</a></li>
                    <li><a class="nav-link" href="#contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/user.svg') }}"></a></li>
                    <li><a class="nav-link" href="cart.html"><img src="{{ asset('assets/images/cart.svg') }}"></a></li>
                </ul>
            </div>
        </div>

    </nav>
    @foreach ($categories as $item)
        @if ($item->id == 1)
            <div class="hero" id="home">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>Lele Berkualitas <br>Percayakan <span style="color: #F8BC38;">Dengan Kami</span>
                                </h1>
                                <p class="lead mt-4 text-justify"
                                    style="text-align: justify; font-size: 16px; width:650px;">
                                    {{ $item->description }}
                                </p>
                                <p><a href="https://api.whatsapp.com/send?phone=6285791323118&text="
                                        class="btn btn-secondary me-2">Contact Now</a><a
                                        href="{{ route('category.about') }}" class="btn btn-white-outline"
                                        style="width: 150px;">Explore</a></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="hero-img-wrap">
                                <img src="{{ asset($item->image) }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-container">
                <img src="{{ asset('assets/images/wave.png') }}" alt="wave">
            </div>
        @endif

        @if ($item->id == 2)
            <!-- Start Product Section -->
            <div class="product-section" id="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail"
                                alt="Menjala Ikan">
                        </div>
                        <div class="col-md-8">
                            <h2 class="mb-4 section-title">{{ $item->name }}</h2>
                            <p class="lead mt-4 text-justify" style="text-align: justify; font-size: 16px;">
                                {{ $item->description }}
                            </p>
                            <p>
                                <a href="{{ route('category.about') }}" class="btn"
                                    style="width: 200px;">Explore</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        @endif


        @if ($item->id == 3)
            <div class="why-choose-section" id="services">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h2 class="section-title">{{ $item->name }}</h2>
                            <p style="text-align: justify; font-size: 16px;">{{ $item->description }}</p>

                            <div class="row my-5">
                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/truck.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Pengiriman Cepat &amp; Efisien</h3>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/bag.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Mudah untuk Membeli
                                            Maupun Bermitra</h3>

                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/support.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Dukungan 24/7 Untuk Investor </h3>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/return.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Komplain atau Saran
                                            Bebas Kerumitan</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="img-wrap col-md-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.922905924852!2d111.86419567395758!3d-8.10933259191975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e3c2364f224b%3A0xd82709517f772f32!2sSiswoyo%20Lele!5e0!3m2!1sid!2sid!4v1733929303672!5m2!1sid!2sid"
                                    width="400" height="300" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 class="section-title" style="padding-top: 10px">Alamat Kami</h2>
                            <p style="width:300px;">Temenggungan, Tawing, Kec. Gondang, Kabupaten Tulungagung, Jawa
                                Timur 66263</p>
                            <p><a href="https://maps.app.goo.gl/eVbv7xSiAD1o8LHU9" class="btn">Maps</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        @if ($item->id == 4)
            <div class="we-help-section" id="benefit">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="imgs-grid">
                                <div class="grid grid-1"><img src="{{ asset($item->image) }}" alt="gambar-lele">
                                </div>
                                <div class="grid grid-3"><img src="{{ asset('assets/images/lelebanyak.png') }}"
                                        alt="gambar-lele"></div>
                                <div class="grid grid-2"><img src="{{ asset('assets/images/image4.png') }}"
                                        alt="gambar-lele"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h2 class="section-title mb-4">{{ $item->name }}</h2>
                            <p style="text-align: justify; font-size: 16px;">{{ $item->description }}</p>

                            <ul class="list-unstyled custom-list my-4">
                                <li><b>Benefit yang Banyak</b>
                                    <p>Dengan bermitra atau menggunakan Jasa atau Budidaya lele kami pastinya
                                        mendapatkan potongan harga yang lebih baik</p>
                                </li>
                                <li><b>Kualitas Lele yang Terbaik</b>
                                    <p>Kami selalu memberikan Pakan yang paling berkualitas untuk Pakan lele kami jadi
                                        tidak usah ragu untuk memastikan lele tersebut</p>
                                </li>
                                <li><b>Lebih Banyak Waktu</b>
                                    <p>Kami melakukan pengiriman pada saat itu juga tanpa adanya delay dengan begitu
                                        pelanggan dapat dengan santai menunggu lelenya</p>
                                </li>
                                <li><b>Ramah Bagi Lingkungan</b>
                                    <p>Kami membuang limbah lele tersebut di selokan kusus guna agar di serap oleh tanah
                                        nantinya ataupun menguap</p>
                                </li>
                                <h2 class="section-title mb-4">Hubungi Kami Segera via WhatsUp</h2>
                                <p><a herf="https://api.whatsapp.com/send?phone=6285791323118&text=" class="btn">Contact Now</a></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($item->id > 4)

            <div class="product-section" id="more">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail"
                                alt="Menjala Ikan">
                        </div>
                        <div class="col-md-8">
                            <h2 class="mb-4 section-title">{{ $item->name }}</h2>
                            <p class="lead mt-4 text-justify" style="text-align: justify; font-size: 16px;">
                                {{ $item->description }}
                            </p>
                            <p>
                                <a href="{{ route('category.about') }}" class="btn"
                                    style="width: 200px;">Explore</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @endforeach



    <footer class="footer-section" id="contact">
        <div class="container relative">

            <div class="sofa-img">
                <img src="{{ asset('assets/images/lele.png') }}" alt="Image" class="img-fluid">
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img
                                    src="{{ asset('assets/images/envelope-outline.svg') }}" alt="Image"
                                    class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                        <form action="https://api.whatsapp.com/send?phone=6285791323118&text=" class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Siswoyo<span
                                style="color: #F8BC38;">Lele</span></a></div>
                    <p class="mb-4" style="text-align: justify; font-size: 13px;">Budidaya ikan lele kami telah berdiri sejak 2010, berkomitmen menyajikan lele
                        berkualitas bagi pelanggan. Dengan pengalaman kerja sama bersama PT CHAROEN POKPHAND INDONESIA
                        Tbk (2015-2020), CP Prima Tbk (2020-2024), dan investor lainnya, Siswoyo Lele memastikan setiap
                        proses budidaya dilakukan secara profesional dan ramah lingkungan. Kami hadir untuk memenuhi
                        kebutuhan lele berkualitas, baik untuk konsumsi pribadi maupun usaha kuliner Anda.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <h3>Content</h3>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#benefit">Benefit</a></li>
                                <li><a href="#contact">Contact us</a></li>
                                <li><a href="{{ route('category.categori') }}">Edit Blog</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h3>Jam Buka</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><b>Senin - Jumat</b><br>08:00 - 17:00</a></li>
                                <li><a href="#"><b>Sabtu - Minggu</b><br>09:00 - 15:00</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h3>Contact Kami</h3>
                            <ul class="list-unstyled">
                                <li><a href="https://api.whatsapp.com/send?phone=6285791323118&text=">
                                <li><img style="width: 20px;" src="{{ asset('assets/images/tlp.svg') }}"> +62 857 913
                                    231 118 (Siswoyo)</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <h3>Alamat Kami</h3>
                            <ul class="list-unstyled">
                                <li><a href="https://maps.app.goo.gl/eVbv7xSiAD1o8LHU9">Temenggungan, Tawing, Kec.
                                        Gondang, Kabupaten Tulungagung, Jawa
                                        Timur 66263</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright SiswoyoLele &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed by <a
                                href="https://github.com/vlnz">Valentino</a>
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


</html>
