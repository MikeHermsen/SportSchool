@extends('layouts.app')


@section('content')
    <div class="w-full h-full flex justify-center items-center mt-1/2">
        {!! DNS2D::getBarcodeHTML('Dit werkt al', 'QRCODE') !!}
    </div>
@endsection
