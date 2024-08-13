@props([
    'project'
])

<div class="bg-white/5 rounded-2xl p-4 flex flex-col text-center">
    <div class="self-start text-sm">Laravel</div>

    <div class="font-bold py-5">
        <h3>{{$project->title}}</h3>
        <p>{{$project->created_at}}</p>
    </div>

    <div class="flex justify-between items-center">
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>

        <a href="#">
            <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/42/42" alt="" class="rounded-xl">
        </a>
    </div>
</div>
