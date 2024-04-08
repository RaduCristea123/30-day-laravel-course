<x-layout>
    <x-slot:heading>
        Job Listingss
    </x-slot:heading>

    <div class="space-y-2">
        @foreach($jobs as $job)
            <div class="px-4 py-6 border border-gray-200 rounded-lg">
                <div class="block font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div class="flex">
                    <a href="/jobs/{{ $job['id'] }}" >
                    <strong>{{ $job['title'] }}: </strong> pays {{ $job['salary'] }} {{ $job['currency'] }}.
                    </a>
                    <a href="/jobs/{{ $job['id'] }}/edit" class="ml-auto fa fa-edit">
                        Edit
                    </a>
                </div>
            </div>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>


</x-layout>
