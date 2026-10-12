(function () {
    'use strict';
    var $ = function (s, c) { return (c || document).querySelector(s); };
    var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
    var WA = (window.PORTFOLIO && window.PORTFOLIO.wa) || '6289504810142';
    var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* Menu HP */
    var toggle = $('#menuToggle'), nav = $('#navLinks');
    function closeMenu() {
        if (!nav) return;
        nav.classList.remove('is-open'); toggle.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
    }
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-open', open);
            toggle.setAttribute('aria-expanded', String(open));
        });
        $$('a', nav).forEach(function (a) { a.addEventListener('click', closeMenu); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeMenu(); });
    }

    /* Header */
    var header = $('#siteHeader');
    function onScroll() { if (header) header.classList.toggle('is-scrolled', (window.scrollY || 0) > 10); }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* Menu aktif */
    var links = $$('.nav-links a[href^="#"]:not(.nav-cta)');
    if ('IntersectionObserver' in window) {
        var spy = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (!en.isIntersecting) return;
                links.forEach(function (l) { l.classList.toggle('is-current', l.getAttribute('href') === '#' + en.target.id); });
            });
        }, { rootMargin: '-45% 0px -50% 0px' });
        $$('main section[id]').forEach(function (s) { spy.observe(s); });

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (!en.isIntersecting) return;
                en.target.classList.add('is-visible'); io.unobserve(en.target);
            });
        }, { threshold: 0.12 });
        $$('.reveal').forEach(function (el) { io.observe(el); });
    } else {
        $$('.reveal').forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* Slider hero */
    var slides = $$('#heroSlider .slide'), dots = $$('#heroDots button'), urlEl = $('#heroUrl');
    var idx = 0, timer;
    function show(i) {
        idx = (i + slides.length) % slides.length;
        slides.forEach(function (s, n) { s.classList.toggle('is-active', n === idx); });
        dots.forEach(function (d, n) { d.classList.toggle('is-active', n === idx); });
        if (urlEl) urlEl.textContent = slides[idx].getAttribute('data-host');
    }
    function play() { if (!reduced && slides.length > 1) { clearInterval(timer); timer = setInterval(function () { show(idx + 1); }, 4500); } }
    if (slides.length) {
        dots.forEach(function (d, n) { d.addEventListener('click', function () { show(n); play(); }); });
        var sl = $('#heroSlider');
        if (sl) { sl.addEventListener('mouseenter', function () { clearInterval(timer); }); sl.addEventListener('mouseleave', play); }
        play();
    }

    /* Salin nomor */
    var copyBtn = $('#copyWa');
    if (copyBtn) {
        copyBtn.addEventListener('click', function () {
            var text = copyBtn.getAttribute('data-copy'), label = $('span', copyBtn);
            function done() {
                copyBtn.classList.add('is-done'); label.textContent = 'Tersalin';
                setTimeout(function () { copyBtn.classList.remove('is-done'); label.textContent = 'Salin'; }, 1800);
            }
            function fallback() {
                var t = document.createElement('textarea'); t.value = text; t.style.position = 'fixed'; t.style.opacity = '0';
                document.body.appendChild(t); t.select();
                try { document.execCommand('copy'); done(); } catch (e) { label.textContent = text; }
                document.body.removeChild(t);
            }
            if (navigator.clipboard && window.isSecureContext) navigator.clipboard.writeText(text).then(done, fallback);
            else fallback();
        });
    }

    /* Form ke WhatsApp */
    var form = $('#waForm');
    if (form) {
        var err = $('#formError'), name = $('#fName'), msg = $('#fMsg');
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var bad = [];
            [name, msg].forEach(function (f) { f.classList.remove('is-invalid'); });
            if (!name.value.trim()) bad.push(name);
            if (msg.value.trim().length < 5) bad.push(msg);
            if (bad.length) {
                bad.forEach(function (f) { f.classList.add('is-invalid'); });
                err.textContent = 'Mohon isi nama dan pesan.'; err.hidden = false; bad[0].focus();
                return;
            }
            err.hidden = true;
            var text = 'Halo Eka, saya ' + name.value.trim() + '.\n\n' + msg.value.trim();
            var url = 'https://wa.me/' + WA + '?text=' + encodeURIComponent(text);
            var w = window.open(url, '_blank', 'noopener');
            if (!w) window.location.href = url;
        });
        [name, msg].forEach(function (f) { f.addEventListener('input', function () { f.classList.remove('is-invalid'); }); });
    }

    var year = $('#year');
    if (year) year.textContent = new Date().getFullYear();

    /* Teman pixel interaktif: aman berdiri sendiri, tanpa mengubah fitur lama */
    var buddy = $('#pixelBuddy'), buddyButton = $('#pixelBuddyButton'), buddyText = $('#pixelBuddyText');
    if (buddy && buddyButton && buddyText) {
        var buddyMessages = [
            'Selamat datang di dunia portofolio saya. Klik aku untuk menjelajah!',
            'Cek bagian Proyek untuk melihat website yang pernah saya buat.',
            'Saya juga meneliti machine learning dan menulis publikasi ilmiah.',
            'Punya ide proyek? Yuk, ngobrol lewat WhatsApp!'
        ];
        var buddyIndex = 0;
        function toggleBuddy() {
            var open = buddy.classList.toggle('is-open');
            buddyButton.setAttribute('aria-expanded', String(open));
            if (open) {
                buddyText.textContent = buddyMessages[buddyIndex % buddyMessages.length];
                buddyIndex++;
            }
        }
        buddyButton.addEventListener('click', toggleBuddy);
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && buddy.classList.contains('is-open')) {
                buddy.classList.remove('is-open');
                buddyButton.setAttribute('aria-expanded', 'false');
                buddyButton.focus();
            }
        });
    }

})();
