<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Pets
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <p class="text-gray-600">Welcome back, {{ $owner }}. Here are the pets on your account.</p>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg divide-y">
                @foreach ($pets as $pet)
                    <div class="p-4 flex justify-between items-center">
                        <span class="font-medium text-gray-800">{{ $pet['name'] }}</span>
                        <div class="text-sm text-gray-500 flex items-center gap-4">
                            <span class="{{ $pet['status'] === 'Vaccinated' ? 'text-emerald-600' : 'text-amber-600' }}">
                                {{ $pet['status'] }}
                            </span>
                            <span>Next checkup: {{ $pet['next_checkup'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
