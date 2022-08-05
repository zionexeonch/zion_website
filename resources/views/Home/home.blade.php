@extends("layouts.template")
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
                        <p class="typewrite" data-period="2000"
                            data-type='[ "Hi, Im Zion Exeon Ch", "Digital Artist", "VTuber Indonesia", "Programmer Full Stack Web Developer", "Freelancer Indonesia" ]'>
                            <span class="wrap"></span>
                        </p>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <article class="mt-4 mb-3">
                <div id="judul">
                    <h1>About Me</h1>
                </div>
            </article>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-2 mb-3 g-4">
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="p-family">Nyahoo🐾🐾... I'm Zion the cat man. I am an artist, programmer and
                                content
                                creator. I just graduated from vocational high school.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="p-family">I'm still 18 years old. My hobbies are drawing, playing games, reading
                                manga,
                                watching anime, and so on. I hope we can be good friends okay. so greetings neko
                                nyaa🐾🐾...</p>
                        </div>
                    </div>
                </div>
            </div>
            <article>
                <div id="judul">
                    <h1>Skills</h1>
                </div>
            </article>
            <h3 class="mt-3">Art Skills</h3>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-4 mb-3 g-4">
                @foreach ($skillarts as $skillart)
                <div class="col">
                    <div class="card border-0">
                        <img src="/img/art/{{ $skillart->gambar }}" class="card-img-top" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            <h3>Programming Skills</h3>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-4 mb-3 g-4">
                @foreach ($skillprogrammers as $skillprogrammer)
                <div class="col">
                    <div class="card border-0">
                        <img src="/img/art/{{ $skillprogrammer->gambar }}" class="card-img-top" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,208C384,181,480,107,576,101.3C672,96,768,160,864,197.3C960,235,1056,245,1152,218.7C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="portfolio" style="background-color: black">
        <div class="container">
            <article class="mb-3 text-white">
                <div id="judul" class="text-white  text-center">
                    <h1>Work Result</h1>
                </div>
                <h3 class="mt-3">Art Commission :</h3>
            </article>
            <div class="row row-cols-1 row-cols-md-3 mb-3 g-4">
                @foreach ($fanarts as $fanart )
                <div class="col">
                    <div class="card border-0">
                        <img src="/img/{{ $fanart->gambar }}" class="card-img-top" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="alert alert-danger" role="alert">
                <span class="fs-6">Note : Itu gambar commission lama ku jadi jangan kaget kalau wm nya pake akun lama
                    bukan akun yang sekarang aku pakai</span>
            </div>
            <article class="mb-3 text-white">
                <h3 class="mt-3">Web Program Application :</h3>
            </article>
            <div class="row row-cols-1 row-cols-md-3 mb-3 g-4">
                @foreach ($gambars as $gambar )
                <div class="col">
                    <a href="/detail/{{ $gambar->id }}">
                        <div class="card kartu-hasil text-white rounded border-0">
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
            <path fill="#fff" fill-opacity="1"
                d="M0,224L48,240C96,256,192,288,288,261.3C384,235,480,149,576,149.3C672,149,768,235,864,272C960,309,1056,299,1152,266.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="social">
        <div class="container">
            <article class="mb-3 text-center">
                <div id="judul">
                    <h1>Social Media</h1>
                </div>
            </article>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-3  mb-3 g-4">
                <div class="col">
                    <div class="card border-0">
                        <a href="https://www.instagram.com/zionexeonch.2/" target="_blank" class="button">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <a href="https://twitter.com/zionexeonch" target="_blank" class="button2">
                            <i class="fa-brands fa-twitter"></i> Twitter
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <a href="https://www.youtube.com/channel/UC4WSzheKlhmJKGGdwg3LnDw" target="_blank"
                            class="button3">
                            <i class="fa-brands fa-youtube"></i> Youtube
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <a href="https://wa.me/6285875015516" target="_blank" class="button4">
                            <i class="fa-brands fa-whatsapp"></i> Whatsapp
                        </a>
                    </div>
                </div>
            </div>
            <article class="mb-3 text-center">
                <div id="judul">
                    <h1>Donation</h1>
                </div>
            </article>
            <div class="row justify-content-center text-center row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card border-0">
                        <a href="https://trakteer.id/zionexeonch.2/tip" target="_blank" class="button5">Trakteer</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1"
                d="M0,128L48,138.7C96,149,192,171,288,165.3C384,160,480,128,576,149.3C672,171,768,245,864,250.7C960,256,1056,192,1152,154.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
</div>
@endsection()