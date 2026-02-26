@props ([
    'season' => 'winter',
    'year' => date('Y'),
    'animes' => [],
])

<x-layout>

    <h1>You are viewing {{ $season }} - {{ $year }}</h1>

    @foreach($animes as $anime)
        <div class="season-card">
            <h2>{{ $anime['title']['romaji'] }}</h2>
            <a href="/anime/{{ $anime['id'] }}">
                <img src="{{ $anime['coverImage']['medium'] }}" alt="{{ $anime['title']['romaji'] }} Cover Image" />
            </a>
            <span> {{ $anime['format'] }} </span>
            <span> {{ $anime['status'] }} </span>
            <p>{{ $anime['description'] }}</p>
        </div>
    @endforeach


</x-layout>