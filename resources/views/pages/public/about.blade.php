@extends('layouts.public')

@section('content')
@section('title', 'About | ')

{{-- tampilan about --}}
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang KATAlog.</h2>
                    <p class="text-gray-500 mb-6">KATAlog. adalah platform e-commerce terkemuka yang menyediakan berbagai produk berkualitas untuk memenuhi kebutuhan Anda. Kami berkomitmen untuk memberikan pengalaman belanja online yang mudah, aman, dan menyenangkan bagi pelanggan kami.</p>
                    <p class="text-gray-500 mb-6">Didirikan pada tahun 2020, KATAlog. telah tumbuh menjadi salah satu destinasi belanja online favorit di Indonesia. Kami menawarkan berbagai kategori produk mulai dari elektronik, fashion, hingga kebutuhan rumah tangga, semuanya dengan harga kompetitif dan layanan pelanggan yang luar biasa.</p>
                    <p class="text-gray-500">Visi kami adalah menjadi platform e-commerce terpercaya yang menghubungkan penjual dan pembeli dengan cara yang inovatif dan efisien. Misi kami adalah menyediakan produk berkualitas tinggi dengan harga terbaik serta memberikan layanan pelanggan yang tak tertandingi.</p>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80&w=600" alt="About Us" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>
@endsection
