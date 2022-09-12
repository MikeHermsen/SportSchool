@extends('layouts.app')

@section('content')
    <img src="gate.jpeg" style="width:100%; height=100%;">

<script>
    function openGate() {
        window.location.href="/entrance/qr_code";
    }

    setTimeout(openGate, 5000)


</script>
@endsection
