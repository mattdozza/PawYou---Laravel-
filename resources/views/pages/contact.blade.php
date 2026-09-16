<x-site-layout title="Contact">
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">Contact Us</h1>
        <p class="text-gray-500 mt-1">Questions about a pet or a service? Send us a message.</p>
    </x-slot>

    <div class="max-w-lg">
        @if (session('status'))
            <div class="mb-4 p-3 rounded-md bg-emerald-100 text-emerald-800 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <x-card>
            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                    @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="px-5 py-2.5 rounded-md bg-emerald-600 text-white font-medium hover:bg-emerald-700">
                    Send Message
                </button>
            </form>
        </x-card>
    </div>
</x-site-layout>
