@extends('layouts.app')

@section('content')

<div class="bg-white">
    <!-- Comparison table -->
    <div class="max-w-2xl mx-auto bg-white py-16 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <!-- xs to lg -->

        <div class="hidden lg:block">
            <table class="w-full h-px table-fixed">
                <caption class="sr-only">
                    Pricing plan comparison
                </caption>
                <thead>
                    <tr>
                        <th class="pb-4 pl-6 pr-6 text-sm font-medium text-gray-900 text-left" scope="col">
                            <span class="sr-only">Feature by</span>
                            <span>Plans</span>
                        </th>

                        @foreach ($abbenementen as $abbenement)
                            <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">
                                {{ $abbenement->name }}
                                    @if ($abbenement->id == Auth::user()->abbenement_type)
                                        <span class="text-green-500">
                                            <i class="fas fa-check">Current plan</i>
                                        </span>
                                    @endif

                            </th>
                            @endforeach

                    </tr>
                </thead>
                <tbody class="border-t border-gray-200 divide-y divide-gray-200">
                    <tr>
                        <th class="py-8 pl-6 pr-6 align-top text-sm font-medium text-gray-900 text-left" scope="row">
                            Pricing</th>

                        @foreach ($abbenementen as $abbenement)
                        <td class="h-full py-8 px-6 align-top">
                            <div class="h-full flex flex-col justify-between">
                                <div>
                                    <p>
                                        <span class="text-4xl font-extrabold text-gray-900">${{ $abbenement->price }}</span>
                                        <span class="text-base font-medium text-gray-500">/mo</span>
                                    </p>
                                    <p class="mt-4 text-sm text-gray-500">{{ $abbenement->description }}</p>
                                </div>
                                <a href="{{ route('abbenement.get', ['type' => $abbenement->id]) }}"
                                    class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                                    {{ $abbenement->name }}</a>
                            </div>
                        </td>
                        @endforeach

                    <tr>
                        <th class="py-3 pl-6 bg-gray-50 text-sm font-medium text-gray-900 text-left" colspan="4"
                            scope="colgroup">Features</th>
                    </tr>

                    <tr>
                        <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Per week</th>

                        @foreach ($abbenementen as $abbenement)
                            <td class="py-5 px-6">
                                {{ $abbenement->can_take_cursses_amount }}
                            </td>
                        @endforeach

                    </tr>

                    <tr>
                        <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">
                            <a href="{{ route('curssesens_aanvragen') }}" class="text-gray-900 hover:text-gray-700">Cursessens</a>
                        </th>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
