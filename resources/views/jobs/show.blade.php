<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>
    <h1>This job pays {{ $job['salary']." ".$job['currency']}} per year.</h1>
</x-layout>
