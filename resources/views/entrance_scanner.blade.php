@extends('layouts.app')

@section('content')
<form action="/entrance/gaurd/" method="POST">
    @csrf


    @if(session('error'))

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <input type="text" name="token">
    <button type="submit">Submit</button>
</form>
@endsection
