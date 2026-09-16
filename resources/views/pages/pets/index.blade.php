<x-site-layout title="Pets">
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">Meet Our Pets</h1>
        <p class="text-gray-500 mt-1">Click a pet to learn more about them.</p>
    </x-slot>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($pets as $id => $pet)
            <a href="{{ route('pets.show', $id) }}">
                <x-card :image="$pet['image']" :imageAlt="$pet['name']">
                    <x-slot name="header">{{ $pet['emoji'] }} {{ $pet['name'] }}</x-slot>
                    <span class="inline-block px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-xs font-medium mb-1">{{ $pet['type'] }}</span>
                    <br>{{ $pet['breed'] }}

                    <x-slot name="footer">
                        <span class="text-emerald-700 text-sm font-medium">View profile &rarr;</span>
                    </x-slot>
                </x-card>
            </a>
        @endforeach
    </div>
</x-site-layout>
