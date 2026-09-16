@props(['image' => null, 'imageAlt' => ''])

<div class="bg-white rounded-xl border border-emerald-100 shadow-sm overflow-hidden hover:shadow-lg hover:-translate-y-0.5 transition duration-200">
    @if ($image)
        <img src="{{ $image }}" alt="{{ $imageAlt }}" loading="lazy" class="w-full h-40 object-cover">
    @endif

    <div class="p-6">
        @isset($header)
            <div class="mb-3 font-semibold text-lg text-emerald-700">
                {{ $header }}
            </div>
        @endisset

        <div class="text-gray-600 text-sm leading-relaxed">
            {{ $slot }}
        </div>

        @isset($footer)
            <div class="mt-4 pt-4 border-t border-emerald-50">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
