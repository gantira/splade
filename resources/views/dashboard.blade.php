<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-defer url="http://api.quotable.io/random">
                        <p v-text="response.content"></p>
                        <p v-if="processing">Proccessing..</p>
                        <button class="" @click="reload">Reload</button>
                    </x-splade-defer>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
