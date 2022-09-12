@extends('layouts.app')



@section('content')
    <div class="w-full h-full  justify-center flex items-center mt-1/2">
        {!! DNS2D::getBarcodeHTML(route('entrance.gaurd', ['token' => $token]), 'QRCODE') !!}

        <input type="text" name="token_for_js" id="token_for_js"  value="{{ $token }}" hidden>
        <p class="text-center bottom-10 absolute ">Of vul in: {{ $token }}</p>
    </div>

    <script src="{{ asset('js/custom.js') }}">
    </script>

    <script>
        window.setInterval(checkIfOpen, 5000)
    </script>


@endsection

