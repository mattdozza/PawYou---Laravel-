<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome back, :name! Glad to see you at PawYou.", ['name' => auth()->user()->name]) }}
                </div>
            </div>

            <div class="grid sm:grid-cols-3 gap-4">
                <a href="{{ route('account.pets') }}" class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <p class="font-semibold text-emerald-700">My Pets</p>
                    <p class="text-sm text-gray-500 mt-1">Manage your pets' profiles.</p>
                </a>
                <a href="{{ route('account.appointments') }}" class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <p class="font-semibold text-emerald-700">Appointments</p>
                    <p class="text-sm text-gray-500 mt-1">See your upcoming visits.</p>
                </a>
                <a href="{{ route('account.favorites') }}" class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <p class="font-semibold text-emerald-700">Favorites</p>
                    <p class="text-sm text-gray-500 mt-1">Pets you're keeping an eye on.</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
