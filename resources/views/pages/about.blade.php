<x-site-layout title="About">
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">About PawYou</h1>
        <p class="text-gray-500 mt-1">Who we are and why we do this.</p>
    </x-slot>

    <div class="rounded-2xl overflow-hidden mb-10 shadow-sm">
        <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?auto=format&fit=crop&w=1600&q=80"
             alt="A cat and dog cuddling together"
             class="w-full h-56 sm:h-72 object-cover">
    </div>

    <div class="grid md:grid-cols-3 gap-8 items-start">
        <div class="prose max-w-none text-gray-700 space-y-4 md:col-span-2">
            <p>
                PawYou started as a small neighborhood clinic and has grown into a full-service
                pet care center offering veterinary checkups, grooming, boarding, and training.
            </p>
            <p>
                Our team is made up of licensed veterinarians, certified groomers, and pet trainers
                who genuinely love animals. We believe every pet deserves attentive, compassionate care.
            </p>
            <p>
                Whether you have a dog, cat, bird, or rabbit, our staff is trained to handle a wide
                variety of pets with patience and expertise.
            </p>
        </div>

        <div class="space-y-4">
            <div class="rounded-xl bg-emerald-700 text-white p-5 text-center shadow-sm">
                <div class="text-3xl font-extrabold">500+</div>
                <div class="text-emerald-100 text-sm mt-1">Pets cared for every year</div>
            </div>
            <div class="rounded-xl bg-amber-500 text-emerald-950 p-5 text-center shadow-sm">
                <div class="text-3xl font-extrabold">10</div>
                <div class="text-emerald-950/80 text-sm mt-1">Years of experience</div>
            </div>
            <div class="rounded-xl bg-emerald-100 text-emerald-900 p-5 text-center shadow-sm">
                <div class="text-3xl font-extrabold">15</div>
                <div class="text-emerald-700 text-sm mt-1">Dedicated staff members</div>
            </div>
        </div>
    </div>
</x-site-layout>
