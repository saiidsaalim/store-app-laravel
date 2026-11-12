<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Jelajahi koleksi gadget dan periferal pilihan di KATalog.')">
    <title>@yield('title')KATalog.</title>
    @include('layouts.partials.public.styles')

</head>
<body class="public-site">
    <a class="skip-link" href="#main-content">Lewati ke konten utama</a>
    @include('layouts.partials.public.navbar')
    <main id="main-content">
        @yield('content')
    </main>
    @include('layouts.partials.public.footer')
</body>
</html>