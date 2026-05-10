@extends('layouts.public')

@section('content')
@section('title', 'Beranda | ')
    


<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover" alt="Background">
            <div class="absolute inset-0 bg-emerald-900/40 backdrop-blur-[2px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <span class="inline-block px-4 py-1.5 bg-emerald-500/30 border border-emerald-400/50 rounded-full text-sm font-medium mb-6">Gadget & Periferal Terbaru</span>
                    <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">Tingkatkan <span class="text-emerald-400">Produktivitas</span> Tanpa Batas</h1>
                    <p class="text-lg text-emerald-50/90 mb-8 max-w-lg">Kami menyediakan periferal premium mulai dari keyboard mekanik hingga mouse gaming presisi tinggi untuk menunjang performa kerja dan hobi Anda.</p>
                    <div class="flex gap-4">
                        <a href="{{ route('products') }}" class="bg-white text-emerald-700 px-8 py-3 rounded-xl font-bold hover:bg-emerald-50 transition shadow-xl">Jelajahi Produk</a>
                        <a href="{{ route('register') }}" class="bg-transparent border-2 border-white/50 text-white px-8 py-3 rounded-xl font-bold hover:bg-white/10 transition">Daftar Akun</a>
                    </div>
                </div>

                <div class="relative hidden md:block">
                    <div class="relative w-full h-96">
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&q=80&w=900" class="hero-image absolute w-full rounded-3xl shadow-2xl border-4 border-white/20 transition-opacity duration-1000 opacity-100" alt="Dark gaming mouse">
                        <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?auto=format&fit=crop&q=80&w=900" class="hero-image absolute w-full rounded-3xl shadow-2xl border-4 border-white/20 transition-opacity duration-1000 opacity-0" alt="Pro gaming mouse">
                        <img src="https://images.unsplash.com/photo-1595044426077-d36d9236d54a?auto=format&fit=crop&q=80&w=900" class="hero-image absolute w-full rounded-3xl shadow-2xl border-4 border-white/20 transition-opacity duration-1000 opacity-0" alt="Mechanical keyboard">
                        <img src="https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?auto=format&fit=crop&q=80&w=900" class="hero-image absolute w-full rounded-3xl shadow-2xl border-4 border-white/20 transition-opacity duration-1000 opacity-0" alt="Smartwatch">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
                <div class="w-20 h-1.5 bg-emerald-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Produk Original</h3>
                    <p class="text-gray-500">Jaminan barang asli 100% dari distributor resmi dengan garansi panjang.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Harga Terbaik</h3>
                    <p class="text-gray-500">Kami menawarkan harga kompetitif yang sesuai dengan kantong Anda tanpa mengurangi kualitas.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Terjual 1000+</h3>
                    <p class="text-gray-500">Telah dipercaya oleh ribuan pengguna di seluruh Indonesia untuk kebutuhan periferal harian.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="produkpreview" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Produk Terpopuler</h2>
                    <p class="text-gray-500">Pilihan terbaik untuk menunjang performa Anda.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Gaming</div>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Pro Gaming Mouse Z1</h4>
                    <p class="text-emerald-600 font-bold mt-1">Rp 450.000</p>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1595044426077-d36d9236d54a?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Mechanical</div>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Mecha RGB Keyboard</h4>
                    <p class="text-emerald-600 font-bold mt-1">Rp 1.250.000</p>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Aksesoris</div>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Smartwatch Series X</h4>
                    <p class="text-emerald-600 font-bold mt-1">Rp 899.000</p>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Audio</div>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">Wireless Headset Pro</h4>
                    <p class="text-emerald-600 font-bold mt-1">Rp 1.500.000</p>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:gap-4 transition-all">
                    Lihat Produk Lainnya
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

@endsection