<x-layout>
    <div class="grid grid-cols-1 gap-5">
        {{$projects->links()}}
        @foreach($projects as $project)
                <x-project-card-full :project="$project"></x-project-card-full>
        @endforeach
    </div>

</x-layout>
