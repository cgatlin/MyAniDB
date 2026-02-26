@props ([
    'anime' => [],
])

<x-layout>

    <div class="anime-card">
        <h2>{{ $anime['title']['romaji'] }}</h2>
        <img src="{{ $anime['coverImage']['extraLarge'] }}" alt="{{ $anime['title']['romaji'] }} Cover Image" />
        <span> {{ $anime['format'] }} </span>
        <span> {{ $anime['status'] }} </span>
        <p>{{ $anime['description'] }}</p>
    </div>

</x-layout>