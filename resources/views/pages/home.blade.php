<x-site-layout title="Home">
    {{-- Hero banner --}}
    <section class="relative -mx-4 sm:-mx-6 lg:-mx-8 -mt-10 rounded-none sm:rounded-b-2xl overflow-hidden">
        <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=1600&q=80"
             alt="Two happy dogs running together outdoors"
             class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/80 via-emerald-800/60 to-transparent"></div>

        <div class="relative px-6 sm:px-10 py-20 sm:py-28 text-center sm:text-left max-w-2xl">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white drop-shadow-sm">Happy Pets, Happy Homes 🐾</h1>
            <p class="mt-3 text-emerald-50/90 text-lg">
                PawYou offers checkups, grooming, boarding, and training for every kind of pet.
                We currently have {{ $petCount }} adorable pets you can meet on our
                <a href="{{ route('pets.index') }}" class="text-amber-300 underline hover:text-amber-200">Pets</a> page.
            </p>
            <div class="mt-6 flex flex-wrap gap-3 justify-center sm:justify-start">
                <a href="{{ route('services') }}" class="inline-block px-5 py-2.5 rounded-md bg-amber-500 text-emerald-950 font-semibold hover:bg-amber-400 transition">
                    Explore Our Services
                </a>
                <a href="{{ route('pets.index') }}" class="inline-block px-5 py-2.5 rounded-md bg-white/10 border border-white/40 text-white font-medium hover:bg-white/20 transition backdrop-blur-sm">
                    Meet Our Pets
                </a>
            </div>
        </div>
    </section>

    <section class="grid sm:grid-cols-3 gap-6 mt-12">
        <x-card image="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?auto=format&fit=crop&w=800&q=80" imageAlt="Vet gently caring for a cat">
            <x-slot name="header">🏥 Expert Care</x-slot>
            Our licensed veterinarians provide thorough checkups and vaccinations.
        </x-card>

        <x-card image="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=800&q=80" imageAlt="Dog being bathed and groomed">
            <x-slot name="header">✂️ Grooming</x-slot>
            Bathing, brushing, and styling that keeps your pet looking and feeling great.
        </x-card>

        <x-card image="https://images.unsplash.com/photo-1583512603805-3cc6b41f3edb?auto=format&fit=crop&w=800&q=80" imageAlt="Cozy puppy relaxing">
            <x-slot name="header">🏠 Boarding</x-slot>
            A safe, cozy place for your pet to stay while you're away from home.
        </x-card>
    </section>
</x-site-layout>
