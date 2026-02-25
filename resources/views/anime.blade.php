@props ([
    'season' => 'winter',
    'year' => date('Y'),
    'animes' => [],
])

<x-layout>

    <h1>You are viewing {{ $season }} - {{ $year }}</h1>

    @foreach($animes as $anime)
        <div class="anime-card">
            <h2>{{ $anime['title']['romaji'] }} ({{ $anime['title']['native'] }})</h2>
            <p>{{ $anime['id'] }}</p>
        </div>
    @endforeach


</x-layout>