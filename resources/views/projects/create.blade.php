<x-layout>
    <form action="/project" method="post">
        @csrf
        <div class="border-b-2 border-white/20 pb-12 max-w-[500px] mx-auto">
            <div class="mt-10 inline-grid grid-cols-1 gap-x-6 gap-y-8 w-full justify-center align-middle">
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="title" placeholder="Energie creator" value="{{ old('title') }}" required/>

                        <x-form-error name="title"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="description">Description</x-form-label>
                    <div class="mt-2">
                        <x-form-textarea rows="3" name="description" placeholder="Project information..."></x-form-textarea>

                        <x-form-error name="description"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="featured">Featured</x-form-label>

                    <div class="mt-2">
                        <x-form-input type="checkbox" name="featured"/>

                        <x-form-error name="featured"/>
                    </div>

                </x-form-field>

                <x-form-field>
                    <label><strong>Select Category :</strong></label><br/>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <select class=" w-block flex-1 border-0 bg-white/10 py-1.5 pl-1 text-white/70 placeholder:text-white/35 focus:ring-0 sm:text-sm sm:leading-6 ps-2" name="tags[]" multiple >
                           @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>

                           @endforeach

                        </select>

                    </div>
                    <x-form-error name="tags[]"/>

                </x-form-field>

                <x-form-button type="submit" class="col-span-1">Save</x-form-button>


            </div>
        </div>
    </form>
</x-layout>
