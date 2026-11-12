@extends('layouts.public')

@section('title', 'Beranda | ')
@section('meta_description', 'Temukan laptop, keyboard, mouse, dan periferal pilihan untuk kerja dan gaming di KATalog.')

@section('content')
<div class="landing-page">
    <section class="hero-section" aria-labelledby="hero-title">
        <img
            class="hero-backdrop"
            src="{{ asset('images/landing/hero-keyboard.webp') }}"
            alt=""
            aria-hidden="true"
            fetchpriority="high"
        >
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-glow hero-glow-one" aria-hidden="true"></div>
        <div class="hero-glow hero-glow-two" aria-hidden="true"></div>

        <div class="site-container hero-content">
            <div class="hero-copy">
                <span class="hero-badge">
                    <span class="hero-badge-dot" aria-hidden="true"></span>
                    Gadget &amp; Periferal Terbaru
                </span>
                <h1 id="hero-title">
                    Tingkatkan<br>
                    <span>Produktivitas</span><br>
                    Tanpa Batas
                </h1>
                <p class="hero-description">
                    Kami menyediakan periferal premium mulai dari keyboard mekanik hingga mouse gaming presisi tinggi untuk menunjang performa kerja dan hobi Anda.
                </p>
                <div class="hero-actions">
                    <a class="button button-light" href="{{ route('products') }}">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 8h14l1 13H4L5 8Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                            <path d="M9 9V6a3 3 0 0 1 6 0v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                        Jelajahi Produk
                    </a>
                    <a class="button button-outline" href="{{ route('register') }}">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M15 20v-1.5a4.5 4.5 0 0 0-4.5-4.5h-3A4.5 4.5 0 0 0 3 18.5V20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M19 8v6m-3-3h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                        Daftar Akun
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-image-frame">
                    <img
                        src="{{ asset('images/landing/hero-laptop.webp') }}"
                        alt="Laptop dengan pencahayaan ambient biru dan merah"
                        width="1300"
                        height="900"
                        fetchpriority="high"
                    >
                    <div class="hero-image-shade" aria-hidden="true"></div>
                    <span class="hero-image-label">Temukan setup terbaikmu</span>
                </div>

                <div class="hero-feature-list" aria-label="Keunggulan produk KATalog">
                    <div class="hero-feature-card">
                        <span class="feature-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m13 2-3 8h7l-6 12 1-9H6l7-11Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span><strong>Performa Tinggi</strong><small>Responsif &amp; andal</small></span>
                    </div>
                    <div class="hero-feature-card">
                        <span class="feature-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9L12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span><strong>Kualitas Premium</strong><small>Dibuat untuk tahan lama</small></span>
                    </div>
                    <div class="hero-feature-card">
                        <span class="feature-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 5h16v11H4zM2 20h20M9 16v4m6-4v4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span><strong>Kerja &amp; Gaming</strong><small>Nyaman sepanjang hari</small></span>
                    </div>
                </div>

                <div class="hero-indicators" aria-hidden="true">
                    <span class="is-active"></span><span></span><span></span>
                </div>
            </div>
        </div>
    </section>

    <div class="site-container benefits-wrap">
        <section class="benefits-panel" aria-label="Layanan KATalog">
            <div class="benefit-item">
                <span class="benefit-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M3 7h11v10H3zM14 10h4l3 3v4h-7zM7 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm11 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span><strong>Pengiriman Cepat</strong><small>Ke seluruh Indonesia</small></span>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 3 5 6v5c0 4.6 2.9 8.3 7 10 4.1-1.7 7-5.4 7-10V6l-7-3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span><strong>Produk Bergaransi</strong><small>Aman &amp; terpercaya</small></span>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.7"/><path d="M3 10h18m-14 5h4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
                </span>
                <span><strong>Pembayaran Aman</strong><small>Berbagai metode pembayaran</small></span>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M4 13v-2a8 8 0 0 1 16 0v2M4 13h3v6H6a2 2 0 0 1-2-2v-4Zm16 0h-3v6h1a2 2 0 0 0 2-2v-4ZM17 19a5 5 0 0 1-5 3" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span><strong>Dukungan Pelanggan</strong><small>Siap membantu Anda</small></span>
            </div>
        </section>
    </div>

    <section class="category-section" id="kategori" aria-labelledby="category-title">
        <div class="site-container">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">Jelajahi koleksi</span>
                    <h2 id="category-title">Kategori Produk</h2>
                    <p>Temukan berbagai kebutuhan gadget dan periferal terbaik sesuai kebutuhan Anda.</p>
                </div>
                <a class="text-link" href="{{ route('products') }}">
                    Lihat Semua
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>

            <div class="category-grid">
                <a class="category-card category-laptop" href="{{ route('products') }}">
                    <span class="category-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="16" height="12" rx="1.5" stroke="currentColor" stroke-width="1.7"/><path d="M2 20h20l-2-4H4l-2 4Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="category-copy"><strong>Laptop</strong><small>Andalan untuk kerja dan hiburan.</small></span>
                    <img src="{{ asset('images/landing/category-laptop.webp') }}" alt="Laptop untuk produktivitas" width="700" height="500" loading="lazy" decoding="async">
                    <span class="category-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
                <a class="category-card category-keyboard" href="{{ route('products') }}">
                    <span class="category-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><rect x="2.5" y="6" width="19" height="12" rx="2" stroke="currentColor" stroke-width="1.7"/><path d="M6 10h.01M9 10h.01M12 10h.01M15 10h.01M18 10h.01M6 13h.01M9 13h.01M12 13h.01M15 13h.01M18 13h.01M9 16h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </span>
                    <span class="category-copy"><strong>Keyboard</strong><small>Mengetik nyaman dengan karakter.</small></span>
                    <img src="{{ asset('images/landing/category-keyboard.webp') }}" alt="Keyboard mekanik" width="700" height="500" loading="lazy" decoding="async">
                    <span class="category-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
                <a class="category-card category-mouse" href="{{ route('products') }}">
                    <span class="category-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><rect x="6" y="2.5" width="12" height="19" rx="6" stroke="currentColor" stroke-width="1.7"/><path d="M12 3v6m-6 0h12" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
                    </span>
                    <span class="category-copy"><strong>Mouse</strong><small>Kontrol presisi untuk tiap aktivitas.</small></span>
                    <img src="{{ asset('images/landing/category-mouse.webp') }}" alt="Mouse komputer ergonomis" width="700" height="500" loading="lazy" decoding="async">
                    <span class="category-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
                <a class="category-card category-other" href="{{ route('products') }}">
                    <span class="category-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="m12 3 9 5-9 5-9-5 9-5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="m3 12 9 5 9-5M3 16l9 5 9-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="category-copy"><strong>Peripheral Lainnya</strong><small>Lengkapi setup dengan pilihan terbaik.</small></span>
                    <img src="{{ asset('images/landing/category-headset.webp') }}" alt="Headset untuk kerja dan gaming" width="700" height="500" loading="lazy" decoding="async">
                    <span class="category-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
            </div>
        </div>
    </section>

    <section class="why-section" id="tentang-katalog" aria-labelledby="why-title">
        <div class="site-container why-grid">
            <div class="why-image-wrap">
                <img
                    src="{{ asset('images/landing/desk-setup.webp') }}"
                    alt="Desk setup gaming dengan monitor, keyboard, mouse, dan pencahayaan RGB"
                    width="1200"
                    height="700"
                    loading="lazy"
                    decoding="async"
                >
                <div class="why-image-note">
                    <span class="why-note-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9L12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg>
                    </span>
                    <span><strong>Pilihan berkualitas</strong><small>Untuk setiap kebutuhan</small></span>
                </div>
            </div>

            <div class="why-copy">
                <span class="eyebrow">Belanja lebih nyaman</span>
                <h2 id="why-title">Mengapa Memilih <span>KATalog?</span></h2>
                <p>Solusi lengkap kebutuhan gadget dan periferal dengan kualitas, layanan, dan pengalaman terbaik.</p>
                <ul class="why-benefits">
                    <li><span aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Koleksi Produk Lengkap</li>
                    <li><span aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Harga Kompetitif</li>
                    <li><span aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Kualitas Terjamin</li>
                    <li><span aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Layanan Pelanggan Responsif</li>
                </ul>
                <a class="text-link why-link" href="{{ route('about') }}">
                    Tentang KATalog
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="cta-title">
        <div class="site-container">
            <div class="cta-banner">
                <div class="cta-copy">
                    <span class="cta-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 8h14l1 13H4L5 8Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 9V6a3 3 0 0 1 6 0v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                    </span>
                    <div>
                        <h2 id="cta-title">Buat Akun Sekarang dan Dapatkan Pengalaman Belanja Terbaik</h2>
                        <p>Simpan produk favorit, pantau pesanan, dan nikmati berbagai kemudahan lainnya.</p>
                    </div>
                </div>
                <a class="button button-cta" href="{{ route('register') }}">
                    Daftar Akun Sekarang
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
