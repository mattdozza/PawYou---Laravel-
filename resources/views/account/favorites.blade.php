<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Favorites
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 grid sm:grid-cols-2 gap-4">
            @forelse ($favorites as $favorite)
                <div class="bg-white p-4 shadow-sm sm:rounded-lg">
                    <p class="font-medium text-gray-800">{{ $favorite['name'] }} <span class="text-gray-400 font-normal">({{ $favorite['type'] }})</span></p>
                    <p class="text-sm text-gray-500 mt-1">{{ $favorite['reason'] }}</p>
                </div>
            @empty
                <p class="text-gray-500">You haven't favorited any pets yet.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
