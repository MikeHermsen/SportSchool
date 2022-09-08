@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">


    @include('includes.navbar.cursussen')


    @if (session('error'))
        <span class="block sm:inline">{{ session('error') }}</span>
    @endif

    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
        <div class="divide-y-2 divide-gray-200">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Mijn Cursessens</h2>


                <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">

                    @foreach ($cursessens as $curses)

                    <div>

                        @php
                            $pack = DB::table('cursessens')->where('id', $curses->cursen)->first();
                        @endphp

                        <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $pack->name }}</h3>
                        <dl class="mt-2 text-base text-gray-500">
                            <div>
                                <dd>Coach : {{ DB::table('users')->where('id', $pack->coach_id)->value('name') }}</dd>
                                <dd>Week :
                                    {{ $curses->datum }}
                                </dd>
                            </div>
                            <div class="mt-1">
                                <a class="text-blue-500 hover:text-blue-700" href="{{ route('curses.afmelden', ['id' => $pack->id]) }}">
                                    Afschrijven voor {{ $pack->name }}
                                </a>
                            </div>
                        </dl>
                    </div>

                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
