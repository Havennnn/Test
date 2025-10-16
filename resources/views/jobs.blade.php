<x-layout>
    <div>
        <h1 class="text-3xl font-bold text-center py-5">
            JOBS PAGE
        </h1>
        <div class="px-10">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($jobs as $job )
                    <a href="/jobs/{{ $job['id'] }}" class="block text-gray-700 py-8 px-5 border border-gray-300 rounded-md hover:bg-gray-300">
                        <h2 class="font-bold text-gray-800">{{ $job->employer->name }}</h2>
                        {{ $job['title'] }} Pays {{ $job['salary'] }} per month.
                    </a>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $jobs->links() }}
            </div>
        </div>

    </div>
</x-layout>
