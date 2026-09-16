<x-site-layout title="Services">
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">Our Services</h1>
        <p class="text-gray-500 mt-1">Everything your pet needs, in one place.</p>
    </x-slot>

    <div class="grid sm:grid-cols-2 gap-6">
        @foreach ($services as $service)
            <x-card :image="$service['image']" :imageAlt="$service['title']">
                <x-slot name="header">{{ $service['title'] }}</x-slot>
                {{ $service['description'] }}
            </x-card>
        @endforeach
    </div>
</x-site-layout>
