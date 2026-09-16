<x-site-layout :title="$pet['name']">
    <x-slot name="header">
        <a href="{{ route('pets.index') }}" class="text-emerald-700 text-sm hover:underline">&larr; Back to all pets</a>
        <h1 class="text-2xl font-bold text-gray-800 mt-2">{{ $pet['emoji'] }} {{ $pet['name'] }}</h1>
        <p class="text-gray-500 mt-1">Pet profile &middot; ID: {{ $id }}</p>
    </x-slot>

    <div class="grid md:grid-cols-2 gap-6 items-start">
        <div class="rounded-2xl overflow-hidden shadow-sm border border-emerald-100">
            <img src="{{ $pet['image'] }}" alt="{{ $pet['name'] }}" class="w-full h-72 sm:h-96 object-cover">
        </div>

        <x-card>
            <x-slot name="header">About {{ $pet['name'] }}</x-slot>

            <dl class="grid grid-cols-3 gap-4 mb-4 text-gray-700">
                <div>
                    <dt class="text-xs uppercase text-gray-400">Type</dt>
                    <dd class="font-medium">{{ $pet['type'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs uppercase text-gray-400">Breed</dt>
                    <dd class="font-medium">{{ $pet['breed'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs uppercase text-gray-400">Age</dt>
                    <dd class="font-medium">{{ $pet['age'] }} year(s)</dd>
                </div>
            </dl>

            <p>{{ $pet['bio'] }}</p>
        </x-card>
    </div>
</x-site-layout>
