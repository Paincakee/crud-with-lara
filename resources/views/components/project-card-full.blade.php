@props([
    'project'
])

<div class="bg-white/5 rounded-2xl p-4 flex">
    <a href="">
        <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/100/100" alt="" class="rounded-xl">
    </a>

    <div class="px-5 flex-1 flex flex-col justify-between">
        <div class="flex justify-between">
            <h5 class="text-sm text-white/35">Laravel</h5>
            <div>
                <x-tag>Remote</x-tag>
            </div>
        </div>

        <h3 class="font-bold text-lg mb-2">{{$project->title}}</h3>

        <div class="flex justify-between">
            <p class="text-sm">{{$project->created_at}}</p>
            <div>
                <x-tag>test</x-tag>
                <x-tag>test</x-tag>
                <x-tag>test</x-tag>
            </div>
        </div>
    </div>
</div>
