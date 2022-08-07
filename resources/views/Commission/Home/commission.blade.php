@extends("Commission.layouts.template")
@section("content")
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-smooth-scroll="true" class="scrollspy-example"
    tabindex="0">
    <section id="home">
        <div class="jumbotron text-white"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.9) 100%), url(/img/zion.png); height: 639px; min-width: 100%;">
            <div class="container">
                <div class="text-overlay">
                    <div class="judul-jumbotron">
                        <h1 class="display-7 text-center mb-3">Zion Exeon Ch | Portfolio Website</h1>
                    </div>
                    <h2 class="text-center sub-judul">
                        <p class="typewrite" data-period="2000" data-type='[ "Open Commission" ]'>
                            <span class="wrap"></span>
                        </p>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="price">
        <div class="container">
            <article class="mt-4 mb-4 text-center">
                <div id="judul" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Price List</h1>
                </div>
            </article>
            <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card border-0" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="fw-bold sub-title text-center">Art Commission</h3>
                        <div class="card-body">
                            <ul class="p-family fw-bold">
                                <li>Headshot = 10 USD | Rp. 10.000</li>
                                <li>Bust Up = 15 USD | Rp. 20.000</li>
                                <li>Half Body = 20 USD | Rp. 30.000</li>
                                <li>Knee Up = 30 USD | Rp. 40.000</li>
                                <li>Full Body = 40 USD | Rp. 50.000</li>
                            </ul>
                            <hr class="garis-bawah">
                            <ul class="p-family fw-bold">
                                <li>Simple Background = FREE!!</li>
                                <li>Detail Background = 10 - 15 USD | Rp. 10.000 - 20.000</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="fw-bold sub-title text-center">Web Program Aplication Commission</h3>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,101.3C672,96,768,160,864,197.3C960,235,1056,245,1152,218.7C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="ddn" style="background-color: black">
        <div class="container">
            <article class="mb-4">
                <div id="judul" class="text-white" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Do & Do Not</h1>
                </div>
            </article>
            <div class="row row-cols-1 row-cols-md-2 mb-3 g-4">
                <div class="col">
                    <div class="card border-0 text-white" style="background-color: black" data-aos="fade-up"
                        data-aos-duration="1000">
                        <h3 class="fw-bold sub-title text-center">Art Commission :</h3>
                        <div class="card-body">
                            <h4 class="fw-bold">Do :</h4>
                            <ul class="p-family fw-bold">
                                <li>OC (Original Character)</li>
                                <li>Hijab Girl</li>
                                <li>Yuri / Yaoi</li>
                                <li>Couple Romance</li>
                                <li>Fanart</li>
                                <li>NSFW</li>
                                <li>Kemonomimi</li>
                            </ul>
                            <hr class="garis-bawah">
                            <h4 class="fw-bold">Do
                                Not :</h4>
                            <ul class="p-family fw-bold">
                                <li>Heavy Gore (Slight is ok)</li>
                                <li>Live 2D Character</li>
                                <li>Mecha</li>
                                <li>Furry</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-white" style="background-color: black" data-aos="fade-up"
                        data-aos-duration="1000">
                        <h3 class="fw-bold sub-title text-center">Web Program Aplication Commission :</h3>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,224L48,240C96,256,192,288,288,261.3C384,235,480,149,576,149.3C672,149,768,235,864,272C960,309,1056,299,1152,266.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="example">
        <div class="container">
            <article class="mb-4">
                <div id="judul" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Example Projects</h1>
                </div>
            </article>
            <article>
                <h3 class="fw-bold sub-title mt-3" data-aos="fade-right" data-aos-duration="1000">Art Commission :</h3>
            </article>
            <div class="row row-cols-1 row-cols-md-3 mb-3 g-4">
                @foreach ($fanarts as $fanart )
                <div class="col">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/img/{{ $fanart->gambar }}" class="card-img-top" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="alert alert-danger" role="alert" data-aos="fade-up" data-aos-duration="1000">
                <span class="fs-6">Note : That's a picture of my old commission so don't be surprised if the wm uses the
                    old account, not the one I'm using now</span>
            </div>
            <article class="mb-3">
                <h3 class="fw-bold sub-title" data-aos="fade-right" data-aos-duration="1000">Web Program Application :
                </h3>
            </article>
            <div class="row row-cols-1 row-cols-md-3 mb-3 g-4">
                @foreach ($gambars as $gambar )
                <div class="col">
                    <a href="/commission/detail/{{ $gambar->id }}">
                        <div class="card kartu-hasil text-white rounded" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="/img/{{ $gambar->picture }}" class="image rounded" alt="{{ $gambar->judul }}">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{ $gambar->judul }}</h5>
                                <span class="card-text fs-6">{{ $gambar->jenis }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,192C384,171,480,117,576,128C672,139,768,213,864,213.3C960,213,1056,139,1152,122.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="procedure" style="background-color: black">
        <div class="container">
            <article class="mb-4 text-center ">
                <div id="judul" class="text-white" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Procedure</h1>
                </div>
            </article>
            <div class="row row-cols-1 row-cols-md-2 mb-3 g-4">
                <div class="col">
                    <div class="card border-0 text-white" style="background-color: black" data-aos="fade-up"
                        data-aos-duration="1000">
                        <h3 class="fw-bold sub-title text-center">Art Commission :</h3>
                        <div class="card-body">
                            <ul class="p-family fw-bold procedure-list">
                                <li>If want more than one character in one illustration, the price will be multiplied
                                    depending on the number of characters</li>
                                <li>Revision max : 3x</li>
                                <li>If revision done, must pay</li>
                                <li>The payment link will be sent when the order is finished and ready to be sent to you
                                </li>
                                <li>I will finish the commission in 1 - 7 days (depending on busy. Don't forget remind
                                    me)</li>
                                <li>The slots commission is unlimited (will close if i busy for focus on exam)</li>
                                <li>Please be patient</li>
                                <li>If done, I will send the results via gmail or the google drive share link model that
                                    I have prepared to send the results of the order</li>
                                <li>Please cooperate everyone</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-white" style="background-color: black" data-aos="fade-up"
                        data-aos-duration="1000">
                        <h3 class="fw-bold text-center sub-title ">Web Program Application :</h3>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,128C672,85,768,43,864,74.7C960,107,1056,213,1152,234.7C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="payment">
        <div class="container">
            <article class="mb-4">
                <div id="judul" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Payment Via</h1>
                </div>
            </article>
            <div class="row justify-content-center row-cols-1 row-cols-md-3 mb-3 g-4">
                @foreach ($payments as $payment)
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/img/{{ $payment->gambar }}" class="card-img-top" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,192L48,160C96,128,192,64,288,80C384,96,480,192,576,208C672,224,768,160,864,160C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="contact" style="background-color: black">
        <div class="container">
            <article class="mb-4">
                <div id="judul" class="text-white" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Contact & Orders</h1>
                </div>
            </article>
            <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <a href="mailto:artzionsenpai@gmail.com" target="_blank" class="nav-link">
                        <div class="card kartu-kontak mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-envelope fa-5x pt-3 pb-3"></i>
                                <h4 class="fw-bold">Email</h4>
                                <h5 class="card-text">artzionsenpai@gmail.com</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://wa.me/6285875015516" target="_blank" class="nav-link">
                        <div class="card kartu-kontak mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-phone fa-5x pt-3 pb-3"></i>
                                <h4 class="fw-bold">Telepon / WA</h4>
                                <h5 class="card-text">+62 858-7501-5516</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.instagram.com/zionexeonch.2/" target="_blank" class="nav-link">
                        <div class="card kartu-kontak mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-instagram fa-5x pt-3 pb-3"></i>
                                <h4 class="fw-bold">DM Instagram</h4>
                                <h5 class="card-text">Zion Exeon Ch.</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,69.3C672,64,768,96,864,128C960,160,1056,192,1152,181.3C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="social">
        <div class="container">
            <article class="mb-3">
                <div id="judul" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Social Media</h1>
                </div>
            </article>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-3  mb-3 g-4">
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://www.instagram.com/zionexeonch.2/" target="_blank" class="button">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://twitter.com/zionexeonch" target="_blank" class="button2">
                            <i class="fa-brands fa-twitter"></i> Twitter
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://www.youtube.com/channel/UC4WSzheKlhmJKGGdwg3LnDw" target="_blank"
                            class="button3">
                            <i class="fa-brands fa-youtube"></i> Youtube
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://wa.me/6285875015516" target="_blank" class="button4">
                            <i class="fa-brands fa-whatsapp"></i> Whatsapp
                        </a>
                    </div>
                </div>
            </div>
            <article class="mb-3">
                <div id="judul" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Donation</h1>
                </div>
            </article>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card border-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://trakteer.id/zionexeonch.2/tip" target="_blank" class="button5">Trakteer</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,101.3C672,96,768,160,864,197.3C960,235,1056,245,1152,218.7C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
</div>
@endsection()