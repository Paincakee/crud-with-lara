<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Projects</x-section-heading>

            <div class="grid lg:grid-cols-4 gap-10 mt-3">
                @foreach($featuredProjects as $project)
                    <x-project-card :project="$project"></x-project-card>
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-3 flex flex-wrap gap-2">
                @foreach($tags as $tag)
                    <x-tag size="sm">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Projects</x-section-heading>

            <div class="mt-3 grid grid-cols-1 gap-5">
                {{ $projects->links() }}
                @foreach($projects as $project)
                        <x-project-card-full :project="$project"></x-project-card-full>
                @endforeach

            </div>
        </section>
    </div>
</x-layout>
