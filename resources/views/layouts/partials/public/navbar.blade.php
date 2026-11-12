@php($isHome = request()->routeIs('home'))
<nav class="site-nav" x-data="{ open: false }" @keydown.escape.window="open = false">
    <div class="site-container site-nav-inner">
        <a class="brand-mark" href="{{ route('home') }}" aria-label="KATalog, beranda">
            <span class="brand-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none"><path d="M4 5h16v14H4zM8 9l-2 3 2 3m8-6 2 3-2 3m-3-7-2 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>KATalog<span class="brand-period">.</span></span>
        </a>

        <div class="desktop-nav-links" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" @if ($isHome) aria-current="page" @endif @class(['nav-link', 'is-active' => $isHome])>Beranda</a>
            <a href="{{ route('products') }}" @class(['nav-link', 'is-active' => request()->routeIs('products')])>Product</a>
            <a href="{{ route('about') }}" @class(['nav-link', 'is-active' => request()->routeIs('about')])>About</a>
        </div>

        <div class="nav-actions">
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a class="nav-account-button desktop-account" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @elseif (Auth::check())
                <a class="nav-account-button desktop-account" href="{{ route('profile.edit') }}">Profile</a>
            @else
                <a class="nav-account-button desktop-account" href="{{ route('login') }}">Login</a>
            @endif

            <button
                class="mobile-menu-button"
                type="button"
                aria-controls="mobile-nav"
                :aria-expanded="open.toString()"
                :aria-label="open ? 'Tutup menu navigasi' : 'Buka menu navigasi'"
                @click="open = !open"
            >
                <svg x-show="!open" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                <svg x-show="open" x-cloak viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </button>
        </div>
    </div>

    <div class="mobile-nav-panel" id="mobile-nav" x-show="open" x-cloak>
        <a href="{{ route('home') }}" @click="open = false" @class(['mobile-nav-link', 'is-active' => $isHome])>Beranda</a>
        <a href="{{ route('products') }}" @click="open = false" @class(['mobile-nav-link', 'is-active' => request()->routeIs('products')])>Product</a>
        <a href="{{ route('about') }}" @click="open = false" @class(['mobile-nav-link', 'is-active' => request()->routeIs('about')])>About</a>
        <div class="mobile-account-slot">
            @if (Auth::check() && Auth::user()->role === 'admin')
                <a class="mobile-nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @elseif (Auth::check())
                <a class="mobile-nav-link" href="{{ route('profile.edit') }}">Profile</a>
            @else
                <a class="mobile-nav-link" href="{{ route('login') }}">Login</a>
            @endif
        </div>
    </div>
</nav>
