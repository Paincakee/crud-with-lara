<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Projects</x-section-heading>

            <div class="grid lg:grid-cols-4 gap-10 mt-3">
                <x-project-card></x-project-card>
                <x-project-card></x-project-card>
                <x-project-card></x-project-card>
                <x-project-card></x-project-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-3">
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="sm">Frontend</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Projects</x-section-heading>

            <div class="mt-3 grid grid-cols-1 gap-5">
                <x-project-card-full></x-project-card-full>
                <x-project-card-full></x-project-card-full>
                <x-project-card-full></x-project-card-full>
                <x-project-card-full></x-project-card-full>
            </div>
        </section>
    </div>
</x-layout>
