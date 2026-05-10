<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <div class="bg-emerald-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09a13.916 13.916 0 002.103-4.42m2.56-8.83a2.403 2.403 0 00-4.672 1.011v.683a3.198 3.198 0 01-2.012 2.976l-.391.153m19.514-3.44l-.054.09a13.916 13.916 0 01-2.103 4.42m-2.56 8.83a2.403 2.403 0 014.672-1.011v-.683a3.198 3.198 0 002.012-2.976l.391-.153M12 11c0-3.517 1.009-6.799 2.753-9.571m-3.44 2.04L11 3.571m1 17.429h.01M12 20.91a9.004 9.004 0 008.716-6.747M12 20.91a9.004 9.004 0 01-8.716-6.747M12 3.09c2.43 0 4.63.96 6.242 2.516M12 3.09a8.991 8.991 0 00-6.242 2.516"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-emerald-600 ">KATAlog.</span>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-emerald-600 font-medium transition">Beranda</a>
                    <a href="{{ route('products') }}" class="text-gray-600 hover:text-emerald-600 font-medium transition">Product</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-emerald-600 font-medium transition">About</a>
                </div>

                <div class="flex items-center">
                    @if (Auth::check())
                        <a href="{{ route('admin.dashboard') }}" class="bg-emerald-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-emerald-700 transition shadow-lg shadow-emerald-200">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="bg-emerald-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-emerald-700 transition shadow-lg shadow-emerald-200">
                            Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>