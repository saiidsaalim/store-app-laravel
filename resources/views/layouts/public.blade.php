<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')KATAlog.</title>
    
    @include('layouts.partials.public.styles') 

</head>
<body class="bg-white text-gray-800">
<!-- navbar -->
    @include('layouts.partials.public.navbar')  
<!-- main content  -->
    @yield('content')
<!-- footer -->
    @include('layouts.partials.public.footer')
<!-- scripts -->
    @include('layouts.partials.public.scripts')

</body>
</html>