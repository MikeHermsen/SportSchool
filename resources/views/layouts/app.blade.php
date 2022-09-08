<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>
    @yield('head')

</head>

<body>
    @yield('content')
</body>

</html>
