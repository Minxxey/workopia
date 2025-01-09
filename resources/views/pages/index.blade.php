<x-layout>
    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Welcome to Workopia</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
        @forelse($latestJobs as $job)
            <x-job-card :job="$job"></x-job-card>
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>
    <a href="{{route('jobs.index')}}" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-circle-right py-2">Show All Jobs</i>
    </a>
    <x-bottom-banner/>
</x-layout>
