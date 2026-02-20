@props ([
    'season' => 'winter',
    'year' => date('Y'),
])

<x-layout>

    <h1>You are viewing {{ $season }} - {{ $year }}</h1>

</x-layout>