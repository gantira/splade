<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }} - {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-form confirm="Yakin update?" method="patch" :default="$user" :action="route('users.update', $user)" class="space-y-4">
                <x-splade-input name="name" label="Name" />
                <x-splade-input name="email" label="Email" />
                <x-splade-input name="day_of_birth" label="Day of Birth" date range />
                <x-splade-textarea name="biography" label="Biography" autosize/>

                <x-splade-select name="country_code" label="Country" :options="$countries" choices multiple />

                <x-splade-checkbox name="agree_terms" label="Agree with terms?" />

                <x-splade-radios name="role" label="Role" :options="$roles" />


                <x-splade-submit />
            </x-splade-form>
        </div>
    </div>
</x-app-layout>
