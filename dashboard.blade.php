<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <br>
        <p>Welcome to my kitchen app!</p>

        <br>
        <p> This is an app that manages recipies for cooks. Every cook has its own account and can adjust the recipy to his desires.</p>
        <p>Here you can find the following section:</p>
        <a href="{{route('users.index')}}">1. Users Page</a>
        <br>
        <a href="{{route('doctor.index')}}">2. Doctors Page</a>
        <br>

        <br>


    </x-slot>
    <div>

    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>