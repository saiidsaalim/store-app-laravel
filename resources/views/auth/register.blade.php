<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun | {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md my-8">
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl overflow-hidden">
            
            <div class="p-8 md:p-10">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Buat Akun Baru</h1>
                    <p class="text-gray-500 text-sm mt-2">Bergabunglah dengan komunitas kami sekarang</p>
                </div>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="mb-5">
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="nama@email.com" required>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <input type="password" id="password" name="password" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="Minimal 8 karakter" required>
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="Ulangi password" required>
                    </div>

                    <button type="submit" 
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-xl transition-all duration-300 transform active:scale-[0.98] shadow-lg shadow-emerald-200">
                        Daftar Akun
                    </button>
                </form>

                <p class="text-center mt-8 text-sm text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-emerald-600 font-semibold hover:underline">Masuk di sini</a>
                </p>
            </div>
            
            <div class="h-2 bg-emerald-600"></div>
        </div>
    </div>

</body>
</html>