@php
    $wa = '6289504810142';
    $waDisplay = '0895 0481 0142';
    $waLink = fn ($text = '') => 'https://wa.me/' . $wa . ($text ? '?text=' . rawurlencode($text) : '');

    $projects = [
        ['name' => 'Nluck Scarves', 'desc' => 'Website brand hijab dan katalog produk.', 'img' => 'nluck', 'alt' => 'Website Nluck Scarves',
         'url' => 'https://nluckscarves.com', 'host' => 'nluckscarves.com'],
        ['name' => 'Toko Sumini', 'desc' => 'Aplikasi kasir dan akuntansi multi-cabang.', 'img' => 'sumini', 'alt' => 'Aplikasi akuntansi Toko Sumini',
         'url' => 'https://ssmart.nluckscarves.com/login', 'host' => 'ssmart.nluckscarves.com'],
        ['name' => 'Amaris Rent Car', 'desc' => 'Website rental mobil dengan booking online.', 'img' => 'amaris', 'alt' => 'Website Amaris Rent Car',
         'url' => 'https://amaris.nluckscarves.com', 'host' => 'amaris.nluckscarves.com'],
    ];

    $journals = [
        ['year' => '2026', 'venue' => 'Edumatic', 'title' => 'On the Effectiveness of Lightweight CNN Architectures for Fine-Grained Coffee Bean Classification',
         'metric' => '99.17%', 'label' => 'EfficientNetB0', 'url' => 'https://doi.org/10.29408/edumatic.v10i1.34044'],
        ['year' => '2025', 'venue' => 'Sinkron', 'title' => 'Comparative Analysis of Homogeneous and Heterogeneous Ensembles for Diabetes Classification Optimization',
         'metric' => '98%', 'label' => 'Stacking', 'url' => 'https://doi.org/10.33395/sinkron.v9i1.14439'],
        ['year' => '2024', 'venue' => 'JAIC Polibatam', 'title' => 'Application of MobileNetV2 and SVM Combination for Enhanced Accuracy in Pneumonia Classification',
         'metric' => '98%', 'label' => 'MobileNetV2 + SVM', 'url' => 'https://jurnal.polibatam.ac.id/index.php/JAIC/article/view/8426'],
    ];

    $skills = [
        ['Laravel', 'laravel'], ['PHP', 'php'], ['MySQL', 'mysql'], ['HTML', 'html5'], ['CSS', 'css3'],
        ['JavaScript', 'javascript'], ['Python', 'python'], ['TensorFlow', 'tensorflow'], ['Git', 'git'],
    ];
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Portfolio Eka Putra Agus Meindiawan. Web developer dan peneliti machine learning.">
    <meta property="og:title" content="Eka Putra Agus Meindiawan">
    <meta property="og:description" content="Web developer dan peneliti machine learning.">
    <meta property="og:image" content="{{ asset('img/nluck.jpg') }}">
    <title>Eka Putra Agus Meindiawan | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script>document.documentElement.classList.add('js');</script>
</head>
<body>
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <symbol id="i-wa" viewBox="0 0 24 24"><path fill="currentColor" d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.49-1.77-1.66-2.07-.17-.3-.02-.46.13-.61.14-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.48 0 1.46 1.07 2.88 1.22 3.08.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.08 1.76-.72 2-1.41.25-.7.25-1.29.17-1.41-.07-.13-.27-.2-.57-.35zM12.05 21.5h-.01a9.45 9.45 0 01-4.82-1.32l-.35-.2-3.58.94.96-3.49-.23-.36a9.43 9.43 0 01-1.45-5.05c0-5.21 4.24-9.45 9.46-9.45 2.52 0 4.9.98 6.68 2.77a9.4 9.4 0 012.77 6.69c0 5.21-4.24 9.47-9.45 9.47zM20.1 3.9A11.4 11.4 0 0012.05.5C5.77.5.66 5.6.66 11.88c0 2 .52 3.97 1.52 5.7L.56 23.5l6.07-1.59a11.37 11.37 0 005.42 1.38h.01c6.28 0 11.4-5.1 11.4-11.38 0-3.04-1.18-5.9-3.36-8.01z"/></symbol>
    <symbol id="i-arrow" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M8 7h9v9"/></symbol>
</svg>

<header class="site-header" id="siteHeader">
    <div class="header-inner">
        <a class="brand" href="#home" aria-label="Beranda"><span class="brand-mark">E</span><span class="brand-name">Eka Putra</span></a>
        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false" aria-controls="navLinks"><span></span><span></span></button>
        <nav class="nav-links" id="navLinks">
            <a href="#projects">Proyek</a>
            <a href="#publications">Jurnal</a>
            <a href="#contact">Kontak</a>
            <a class="nav-cta" href="{{ $waLink('Halo Eka, saya ingin berdiskusi.') }}" target="_blank" rel="noopener noreferrer"><svg class="ico"><use href="#i-wa"/></svg> WhatsApp</a>
        </nav>
    </div>
</header>

<main>
    <section class="stage" id="home">
        <div class="sky" aria-hidden="true">
            <img class="px sun" src="{{ asset('img/pixel/sun.png') }}" alt="">
            <img class="px cloud c1" src="{{ asset('img/pixel/cloud.png') }}" alt="">
            <img class="px cloud c2" src="{{ asset('img/pixel/cloud.png') }}" alt="">
            <img class="px cloud c3" src="{{ asset('img/pixel/cloud.png') }}" alt="">
        </div>
    <div class="hero wrap">
        <div class="hero-copy">
            <p class="eyebrow">Web Developer &amp; ML Researcher</p>
            <h1>Eka Putra Agus <span>Meindiawan</span></h1>
            <p class="lead">Membangun website dan aplikasi bisnis, serta meneliti machine learning.</p>
            <div class="actions">
                <a class="btn btn-primary" href="{{ $waLink('Halo Eka, saya ingin berdiskusi.') }}" target="_blank" rel="noopener noreferrer"><svg class="ico"><use href="#i-wa"/></svg> Chat WhatsApp</a>
                <a class="btn btn-ghost" href="#projects">Lihat proyek</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="browser" id="heroSlider">
                <div class="browser-bar"><span class="dots"><i></i><i></i><i></i></span><span class="url" id="heroUrl">{{ $projects[0]['host'] }}</span></div>
                <div class="browser-screen">
                    @foreach ($projects as $i => $p)
                        <picture class="slide {{ $i === 0 ? 'is-active' : '' }}" data-host="{{ $p['host'] }}">
                            <source srcset="{{ asset('img/' . $p['img'] . '.webp') }}" type="image/webp">
                            <img src="{{ asset('img/' . $p['img'] . '.jpg') }}" alt="{{ $p['alt'] }}" {{ $i === 0 ? '' : 'loading=lazy' }}>
                        </picture>
                    @endforeach
                </div>
            </div>
            <img class="px block b1" src="{{ asset('img/pixel/grass.png') }}" alt="" aria-hidden="true">
            <img class="px block b2" src="{{ asset('img/pixel/gold.png') }}" alt="" aria-hidden="true">
            <img class="px block b3" src="{{ asset('img/pixel/stone.png') }}" alt="" aria-hidden="true">
            <div class="slider-dots" id="heroDots">
                @foreach ($projects as $i => $p)
                    <button type="button" class="{{ $i === 0 ? 'is-active' : '' }}" aria-label="{{ $p['name'] }}"></button>
                @endforeach
            </div>
        </div>
        </div>
        <div class="ground" aria-hidden="true"></div>
    </section>

    <section class="tech wrap" aria-label="Teknologi">
        <p class="skills-label">Teknologi</p>
        <ul class="tech-grid">
            @foreach ($skills as $i => $t)
                <li class="tech-tile reveal" style="--d: {{ $i * 50 }}ms"><img src="{{ asset('img/tech/' . $t[1] . '.svg') }}" alt="" width="44" height="44" loading="lazy"><span>{{ $t[0] }}</span></li>
            @endforeach
        </ul>
    </section>

    <section class="section wrap" id="projects">
        <header class="section-head section-head-sm reveal"><span class="kicker">Proyek</span></header>
        <div class="grid-3">
            @foreach ($projects as $i => $p)
                <article class="card reveal" style="--d: {{ $i * 90 }}ms">
                    <a class="card-shot" href="{{ $p['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Buka {{ $p['name'] }}">
                        <picture>
                            <source srcset="{{ asset('img/' . $p['img'] . '.webp') }}" type="image/webp">
                            <img src="{{ asset('img/' . $p['img'] . '.jpg') }}" alt="{{ $p['alt'] }}" loading="lazy" width="1400" height="680">
                        </picture>
                    </a>
                    <div class="card-body">
                        <h3>{{ $p['name'] }}</h3>
                        <p>{{ $p['desc'] }}</p>
                        <a class="link" href="{{ $p['url'] }}" target="_blank" rel="noopener noreferrer">Kunjungi <svg class="ico"><use href="#i-arrow"/></svg></a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section tint" id="publications">
        <div class="wrap">
            <header class="section-head reveal"><span class="kicker">Jurnal</span><h2>Publikasi ilmiah</h2></header>
            <div class="pubs">
                @foreach ($journals as $i => $j)
                    <a class="pub reveal" style="--d: {{ $i * 90 }}ms" href="{{ $j['url'] }}" target="_blank" rel="noopener noreferrer">
                        <span class="pub-year">{{ $j['year'] }}</span>
                        <span class="pub-main"><strong>{{ $j['title'] }}</strong><small>{{ $j['venue'] }}</small></span>
                        <span class="pub-metric"><b>{{ $j['metric'] }}</b><small>{{ $j['label'] }}</small></span>
                        <svg class="ico pub-arrow"><use href="#i-arrow"/></svg>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section wrap" id="contact">
        <div class="contact">
            <div class="contact-blocks" aria-hidden="true"><img class="px" src="{{ asset('img/pixel/grass.png') }}" alt=""><img class="px" src="{{ asset('img/pixel/dirt.png') }}" alt=""><img class="px" src="{{ asset('img/pixel/gold.png') }}" alt=""></div>
            <div class="reveal">
                <span class="kicker">Kontak</span>
                <h2>Mari bekerja sama</h2>
                <p class="lead">Respons tercepat lewat WhatsApp.</p>
                <div class="wa-line">
                    <strong>{{ $waDisplay }}</strong>
                    <button type="button" class="copy-btn" id="copyWa" data-copy="+{{ $wa }}"><span>Salin</span></button>
                </div>
                <a class="btn btn-primary" href="{{ $waLink('Halo Eka, saya ingin berdiskusi.') }}" target="_blank" rel="noopener noreferrer"><svg class="ico"><use href="#i-wa"/></svg> Chat WhatsApp</a>
            </div>
            <form class="form reveal" id="waForm" novalidate>
                <label>Nama<input type="text" id="fName" placeholder="Nama Anda" autocomplete="name" required></label>
                <label>Pesan<textarea id="fMsg" rows="4" placeholder="Tulis pesan singkat" required></textarea></label>
                <p class="form-error" id="formError" role="alert" hidden></p>
                <button class="btn btn-primary" type="submit"><svg class="ico"><use href="#i-wa"/></svg> Kirim ke WhatsApp</button>
            </form>
        </div>
    </section>
</main>

<footer class="footer wrap"><span>© <span id="year">{{ date('Y') }}</span> Eka Putra Agus Meindiawan</span><a href="#home">Ke atas</a></footer>


<div class="pixel-buddy" id="pixelBuddy">
    <div class="pixel-buddy-bubble" id="pixelBuddyBubble" role="status" aria-live="polite">
        <strong>Hai, aku Eka!</strong><span id="pixelBuddyText">Selamat datang di dunia portofolio saya. Klik aku untuk menjelajah!</span>
    </div>
    <button class="pixel-buddy-button" id="pixelBuddyButton" type="button" aria-label="Interaksi dengan karakter pixel" aria-expanded="false" aria-controls="pixelBuddyBubble">
        <img src="{{ asset('img/pixel/character.svg') }}" alt="" width="128" height="160">
    </button>
</div>

<a class="wa-float" href="{{ $waLink('Halo Eka, saya dari website portfolio Anda.') }}" target="_blank" rel="noopener noreferrer" aria-label="Chat WhatsApp"><svg class="ico"><use href="#i-wa"/></svg></a>

<script>window.PORTFOLIO = { wa: '{{ $wa }}' };</script>
<script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
