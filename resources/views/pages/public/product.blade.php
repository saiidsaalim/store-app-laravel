@extends('layouts.public')

@section('content')

@section('title', 'Produk | ')
{{-- tampilan produk --}}

    <section id="produkpreview" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Produk Terpopuler</h2>
                    <p class="text-gray-500">Pilihan terbaik untuk menunjang performa Anda.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                 @forelse ($products as $item)
                    <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="{{ Storage::url('products/' . $item->image) }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">{{ $item->category->name ?? 'Kategori' }}</div>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800">{{ $item->name }}</h4>
                    <p class="text-emerald-600 font-bold mt-1">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    <a href="https://api.whatsapp.com/send?phone=6285845708649&text=Halo,%20saya%20ingin%20memesan%20{{ $item->name }}" class="mt-2 bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition duration-300" target="_blank">Beli Sekarang</a>
                </div>
                @empty
                    <div class="group">
                        <p class="text-gray-500 text-center">Tidak ada produk yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-16">
                <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:gap-4 transition-all">
                    Lihat Produk Lainnya
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

@endsection