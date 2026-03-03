@props ([
    'anime' => [],
])

    <div {{ $attributes->merge(['class' => 'card card-side bg-base-100 inline-grid grid-cols-2 shadow-sm']) }}>
    <figure class="cover">
        <a href="/anime/{{ $anime['id'] }}" target="_blank">
        <img
        src="{{ $anime['coverImage']['large'] }}"
        alt="{{ $anime['title']['romaji'] }} Cover Image" 
        class="w-full h-full object-cover"/>
        </a>
    </figure>
    <div class="card-body data h-90">
        <h2 class="card-title">{{ $anime['title']['romaji'] }}</h2>
        <p class="text-sm flex-1 overflow-y-auto scrollbar-hide">{{ $anime['description'] }}</p>
        <div class="card-actions justify-end">
        <div class="badge badge-outline badge-info">{{ $anime['format'] }} </div>
        <div class="badge badge-outline badge-info">{{ $anime['status'] }}</div>
        </div>
    </div>
    </div>
