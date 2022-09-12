@extends('layouts.app')

@section('head')
<script src="{{ asset('/js/custom.js') }}"></script>
@endsection

@section('content')


{{-- Add logout btn --}}
<div class="flex justify-end">
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        class="px-4 mx-6 my-6 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:shadow-outline-indigo-500">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">Frequently asked questions</h2>
            <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                @foreach($faqs as $faq)

                        <div class="pt-6">
                            <dt class="text-lg">
                                <button type="button" onclick="accordionToggle('{{ $loop->index }}')"
                                    class="text-left w-full flex justify-between items-start text-gray-400"
                                    aria-controls="faq-{{ $loop->index }}-" aria-expanded="false">
                                    <span class="font-medium text-gray-900"> {{ $faq->question }}
                                    </span>
                                    <span class="ml-6 h-7 flex items-center">
                                        <svg id="btn-0-" class="rotate-0 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12 hidden" id="faq-{{ $loop->index }}-">
                                <p  class="text-base text-gray-700">

                                    @if ($faq->location != '#')
                                        <a class="bg-blue-900 text-white py-2 px-2 rounded-lg mr-5" href="{{ $faq->location }}"> JumpTo </a>
                                    @endif

                                    {{ $faq->answer }}
                                </p>
                            </dd>
                        </div>
                @endforeach

            </dl>
        </div>
    </div>
</div>


@endsection
