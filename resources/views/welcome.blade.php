<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Projects</x-section-heading>

            <div class="grid lg:grid-cols-4 gap-10 mt-3">
                @foreach($projects as $project)
                    @if($project->featured)
                    <x-project-card :project="$project"></x-project-card>
                    @endif
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-3">
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Tag</x-tag>
                <x-tag size="sm">Team</x-tag>
                <x-tag size="sm">Solo</x-tag>
                <x-tag size="sm">Backend</x-tag>
                <x-tag size="sm">JS</x-tag>
                <x-tag size="sm">Java</x-tag>
                <x-tag size="sm">PHP</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Projects</x-section-heading>

            <div class="mt-3 grid grid-cols-1 gap-5">
                @foreach($projects as $project)
                    @if($project->featured)
                        <x-project-card-full :project="$project"></x-project-card-full>

                    @endif
                @endforeach

            </div>
        </section>
    </div>
</x-layout>
