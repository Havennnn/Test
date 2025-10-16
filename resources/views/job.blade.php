<x-layout>
    <h1 class="text-3xl font-bold text-center py-5">
        {{ $job['title'] }}
    </h1>

    <h2 class="text-center"> {{ $job->employer->name }}</h2>
    <p class="text-center">This job pays {{ $job['salary'] }} per month.</p>

</x-layout>
