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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li><a class="nav-link" href="about.html">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="benefit.html">Benefit</a></li>
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/user.svg') }}"></a></li>
                    <li><a class="nav-link" href="cart.html"><img src="{{ asset('assets/images/cart.svg') }}"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    @foreach ($categories as $item)
        @if ($item->id == 2)
            <div class="hero">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>{{ $item->name }}</h1>
                                <p class="lead mt-4 text-justify"
                                    style="text-align: justify; font-size: 16px; width:650px;">
                                    {{ $item->description }}
                                </p>
                                <p><a href="https://api.whatsapp.com/send?phone=6285339163645&text="
                                        class="btn btn-secondary me-2">Contact Now</a><a href="{{route('/')}}"
                                        class="btn btn-white-outline" style="width: 150px;">Back Now</a></p>
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
    @endforeach

</body>
