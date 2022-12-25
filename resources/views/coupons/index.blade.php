<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coupon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl">Here's your coupon code:</h1>

                    <x-splade-toggle>
                        <button v-if="!toggled" @click="toggle">Show coupon code!</button>

                        <x-splade-lazy show="toggled">
                            <x-slot:placeholder>Loading your code...</x-slot:placeholder>

                            <h2 class="mt-2 text-xl font-mono">
                                {{ $coupon }}
                            </h2>
                        </x-splade-lazy>
                    </x-splade-toggle>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
