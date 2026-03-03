@props ([
    'anime' => [],
])

<x-layout>

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row">
            <img
            src="{{ $anime['coverImage']['extraLarge'] }}" 
            alt="{{ $anime['title']['romaji'] }} Cover Image"
            class="max-w-sm rounded-lg shadow-2xl"
            />
            <div>
                <h1 class="text-5xl pb-2 font-bold">{{ $anime['title']['romaji'] }}</h1>
                @foreach ($anime['genres'] as $genre)
                    <div class="badge badge-soft badge-accent">{{ $genre }} </div>
                @endforeach
                <p class="py-6">{{ $anime['description'] }}</p>
                <div class="badge badge-outline badge-info">{{ $anime['format'] }} </div>
                <div class="badge badge-outline badge-info">{{ $anime['status'] }}</div>
            </div>
        </div>
    </div>

</x-layout>