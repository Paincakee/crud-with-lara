<x-layout>
    <form action="/login" method="post" >
        @csrf
        <div class="border-b-2 border-white/20 pb-12 max-w-[500px] mx-auto">
            <div class="mt-10 inline-grid grid-cols-1 gap-x-6 gap-y-8 w-full justify-center align-middle">
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="email" name="email" placeholder="example@example.nl" value="{{ old('email') }}" required/>

                        <x-form-error name="email"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" placeholder="*******" class="" required/>

                        <x-form-error name="password"/>
                    </div>
                </x-form-field>

                <x-form-button type="submit" class="col-span-1">Login</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
