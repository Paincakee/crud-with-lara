@props([
    'project'
])

<div class="relative bg-white/5 rounded-2xl p-4 flex hover:bg-white/10 transition group duration-300">
    <a href="{{route('project.show', ['project' => $project])}}" class="absolute inset-0"></a>

    <a href="#" class="z-10">
        <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/100/100" alt="" class="rounded-xl">
    </a>

    <div class="px-5 flex-1 flex flex-col justify-between">
        <div class="flex justify-between">
            <h5 class="text-sm text-white/35">{{$project->user->name}}</h5>
            <div class="z-10">
                <x-tag :tag="$project->tags[0]"></x-tag>
            </div>
        </div>

        <h3 class="font-bold text-lg mb-2">{{$project->title}}</h3>

        <div class="flex justify-between">
            <p class="text-sm">{{$project->created_at}}</p>
            <div class="flex flex-wrap gap-1 z-10">
                @foreach($project->tags as $tag)
                    <x-tag :tag="$tag"></x-tag>
                @endforeach
            </div>
        </div>
    </div>
</div>
