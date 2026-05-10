<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl overflow-hidden">
            
            <div class="p-8 md:p-10">
                <div class="flex justify-center mb-6">
                    <a href="/" class="inline-flex items-center justify-center w-12 h-12 bg-emerald-100 hover:bg-emerald-200 rounded-full transition-colors duration-200 shadow-md">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                </div>
                <div class="text-center mb-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-emerald-100 rounded-2xl mb-4 shadow-inner">
                        
                        <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09a13.916 13.916 0 002.103-4.42m2.56-8.83a2.403 2.403 0 00-4.672 1.011v.683a3.198 3.198 0 01-2.012 2.976l-.391.153m19.514-3.44l-.054.09a13.916 13.916 0 01-2.103 4.42m-2.56 8.83a2.403 2.403 0 014.672-1.011v-.683a3.198 3.198 0 002.012-2.976l.391-.153M12 11c0-3.517 1.009-6.799 2.753-9.571m-3.44 2.04L11 3.571m1 17.429h.01M12 20.91a9.004 9.004 0 008.716-6.747M12 20.91a9.004 9.004 0 01-8.716-6.747M12 3.09c2.43 0 4.63.96 6.242 2.516M12 3.09a8.991 8.991 0 00-6.242 2.516"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800">Selamat Datang</h1>
                    <p class="text-gray-500 text-sm mt-2">Silakan masuk ke akun Anda</p>
                </div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="nama@email.com" required>
                        @error('email')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm font-semibold text-gray-700">Password</label>
                            <a href="#" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium">Lupa Password?</a>
                        </div>
                        <input type="password" id="password" name="password" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-gray-50/50" 
                               placeholder="••••••••" required>
                        @error('password')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center mb-8">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500 cursor-pointer">
                        <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">Ingat saya</label>
                    </div>

                    <button type="submit" 
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-xl transition-all duration-300 transform active:scale-[0.98] shadow-lg shadow-emerald-200">
                        Masuk Sekarang
                    </button>
                </form>

                <p class="text-center mt-8 text-sm text-gray-600">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" method="post" class="text-emerald-600 font-semibold hover:underline">Daftar Gratis</a>
                </p>
            </div>
            
            <div class="h-2 bg-emerald-600"></div>
        </div>
        
        <p class="text-center text-white/80 text-xs mt-6">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Built with ❤️ for your business.
        </p>
    </div>

</body>
</html>