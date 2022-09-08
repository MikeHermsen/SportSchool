<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>
    @yield('head')

</head>


<body>

    @if (Auth::check())

        <a href="{{ route('home') }}"class="px-4 mx-6 my-6 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:shadow-outline-indigo-500">
            Home
        </a>

    @endif

    @yield('content')
</body>

</html>
