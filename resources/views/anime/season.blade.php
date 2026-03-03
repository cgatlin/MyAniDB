@props ([
    'season' => 'winter',
    'year' => date('Y'),
    'animes' => [],
])

<x-layout>

    <h1 class="pb-2">You are viewing {{ $season }} - {{ $year }}</h1>

    <p class="text-4xl font-bold">TV</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['TV'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>
    <p class="text-4xl font-bold">TV_SHORT</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['TV_SHORT'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>
    <p class="text-4xl font-bold">ONA</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['ONA'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>
    <p class="text-4xl font-bold">OVA</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['OVA'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>
    <p class="text-4xl font-bold">SPECIAL</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['SPECIAL'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>
    <p class="text-4xl font-bold">MOVIE</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes['MOVIE'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>

    <p class="text-4xl font-bold hidden">ADULT</p>
    <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3 hidden" >
        @foreach($animes['isAdult'] as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul>


    {{-- <ul class="mt-6 grid grid-cols-3 gap-x-10 gap-y-20 p-3" >
        @foreach($animes as $anime)
            <x-anime-card class="anime-card" :anime="$anime" />
        @endforeach
    </ul> --}}

</x-layout>