@props([
    'project'
])

<div class="relative bg-white/5 rounded-2xl p-4 flex flex-col text-center hover:bg-white/10 transition duration-300">
    <a href="{{ route('project.show', ['project' => $project])}}" class="absolute inset-0"></a>

    <div class="self-start text-sm text-white/35">{{$project->user->name}}</div>

    <div class="font-bold py-5 max-h-[88px] truncate">
        <h3>{{$project->title}}</h3>
        <p>{{$project->created_at}}</p>
    </div>

    <div class="flex justify-between items-center">
        <div class="flex flex-wrap gap-1 z-10">
            @foreach($project->tags as $tag)
                <x-tag :tag="$tag"></x-tag>
            @endforeach
        </div>

        <a href="#">
            <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/42/42" alt="" class="rounded-xl min-w-[42px] min-h-[42px]">
        </a>
    </div>
</div>
