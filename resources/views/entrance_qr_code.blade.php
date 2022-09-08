@extends('layouts.app')


@section('content')
    <div class="w-full h-full  justify-center flex items-center mt-1/2">
        {!! DNS2D::getBarcodeHTML(route('entrance.gaurd', ['token' => $token]), 'QRCODE') !!}

        <p class="text-center bottom-10 absolute ">Of vul in: {{ $token }}</p>
    </div>
@endsection
