<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $judul }}</title>
        {{-- File CSS --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">                        
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templatemo-style.css') }}">                             
    </head>
    <body>
        {{-- Include Navbar --}}
        @include('layout.navbar')

        {{-- Yield Isi Content --}}
        @yield('isicontent')
        
        {{-- Include Footer --}}
        @include('layout.footer')

        <!-- File JS -->
        <script type="text/javascript" src="{{ asset('assets/script/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets/script/bootstrap.min.js') }}"></script>
</body>
</html>
