@extends('layouts.app')

@section('content')

<div class="bg-white">
    <!-- Comparison table -->
    <div class="max-w-2xl mx-auto bg-white py-16 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <!-- xs to lg -->
        <div class="space-y-24 lg:hidden">
            <section>
                <div class="px-4 mb-8">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Basic</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$9</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
                    <a href="#"
                        class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Basic</a>
                </div>

                <table class="w-full">
                    <caption
                        class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie
                                lobortis massa.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus
                                felis.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus
                                pulvinar sit dictum.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/minus -->
                                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">No</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.
                            </th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/minus -->
                                <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">No</span>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#"
                        class="block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Basic</a>
                </div>
            </section>

            <section>
                <div class="px-4 mb-8">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Essential</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$29</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
                    <a href="#"
                        class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Essential</a>
                </div>

                <table class="w-full">
                    <caption
                        class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie
                                lobortis massa.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus
                                felis.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus
                                pulvinar sit dictum.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.
                            </th>
                            <td class="py-5 pr-4">
                                <span class="block text-sm text-gray-700 text-right">Up to 20 users</span>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#"
                        class="block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Essential</a>
                </div>
            </section>

            <section>
                <div class="px-4 mb-8">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Premium</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$59</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.
                    </p>
                    <a href="#"
                        class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Premium</a>
                </div>

                <table class="w-full">
                    <caption
                        class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie
                                lobortis massa.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus
                                felis.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus
                                pulvinar sit dictum.</th>
                            <td class="py-5 pr-4">
                                <!-- Heroicon name: solid/check -->
                                <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Yes</span>
                            </td>
                        </tr>

                        <tr class="border-t border-gray-200">
                            <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.
                            </th>
                            <td class="py-5 pr-4">
                                <span class="block text-sm text-gray-700 text-right">Up to 50 users</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#"
                        class="block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                        Premium</a>
                </div>
            </section>
        </div>

        <!-- lg+ -->
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

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">
                            Basic</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">
                            Essential</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">
                            Premium</th>
                    </tr>
                </thead>
                <tbody class="border-t border-gray-200 divide-y divide-gray-200">
                    <tr>
                        <th class="py-8 pl-6 pr-6 align-top text-sm font-medium text-gray-900 text-left" scope="row">
                            Pricing</th>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="h-full flex flex-col justify-between">
                                <div>
                                    <p>
                                        <span class="text-4xl font-extrabold text-gray-900">$9</span>
                                        <span class="text-base font-medium text-gray-500">/mo</span>
                                    </p>
                                    <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus
                                        non tellus.</p>
                                </div>
                                <a href="#"
                                    class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                                    Basic</a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="h-full flex flex-col justify-between">
                                <div>
                                    <p>
                                        <span class="text-4xl font-extrabold text-gray-900">$29</span>
                                        <span class="text-base font-medium text-gray-500">/mo</span>
                                    </p>
                                    <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A
                                        tempor in sed.</p>
                                </div>
                                <a href="#"
                                    class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                                    Essential</a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="h-full flex flex-col justify-between">
                                <div>
                                    <p>
                                        <span class="text-4xl font-extrabold text-gray-900">$59</span>
                                        <span class="text-base font-medium text-gray-500">/mo</span>
                                    </p>
                                    <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis
                                        tristique non.</p>
                                </div>
                                <a href="#"
                                    class="mt-6 block w-full bg-gradient-to-r from-orange-500 to-pink-500 border border-transparent rounded-md shadow py-2 text-sm font-semibold text-white text-center hover:to-pink-600">Buy
                                    Premium</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pl-6 bg-gray-50 text-sm font-medium text-gray-900 text-left" colspan="4"
                            scope="colgroup">Features</th>
                    </tr>

                    <tr>
                        <th class="py-5 pl-6 pr-6 text-sm font-normal text-gray-500 text-left" scope="row">Per week</th>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            1
                            <span class="sr-only">Included in Basic</span>
                        </td>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            2
                            <span class="sr-only">Included in Essential</span>
                        </td>

                        <td class="py-5 px-6">
                            <!-- Heroicon name: solid/check -->
                            ∞
                            <span class="sr-only">Included in Premium</span>
                        </td>
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