<x-layout>
    <x-slot:heading>Jobs Listings</x-slot:heading>
    <div class="space-y-2">
        @foreach ($jobs as  $job)
        <article>
            <a href="/jobs/{{$job['id']}}" class="text-white block px-4 py-6 border border-gray-200 rounded-lg bg-gray-800 hover:bg-gray-700">
                <div>
                    <strong>{{$job['title']}}</strong> 
                </div>
                <div>
                   Employers: 
                   <div class = "font-bold text-blue-500 text-sm">{{ $job->employer->name}}</div>
                </div>    
            </a>
        </article>
    @endforeach
    </div>
</x-layout> 