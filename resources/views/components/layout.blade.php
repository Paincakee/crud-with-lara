<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cruddie</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black">
    <div class="px-10 text-white">
        <nav class="flex justify-between items-center py-4 border-b border-white/25">
            <div class="flex space-x-6 font-bold">
                <a href="{{url('/')}}">
                    <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/50/50" alt="">
                </a>
                @auth
                <x-nav-link :active="request()->is('account')" href="{{url('account')}}">{{auth()->user()->name}}</x-nav-link>
                @endauth
            </div>

            <div class="space-x-6 font-bold flex">
                <x-nav-link :active="request()->is('project')" href="{{url('project')}}">Projects</x-nav-link>
                <x-nav-link :active="request()->is('company')" href="{{url('company')}}">Companies</x-nav-link>
                <x-nav-link :active="request()->is('about')" href="{{url('about')}}">About us</x-nav-link>
            </div>

            <div>
                @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <a href="#">Publish a Project</a>
                @endauth
                @guest
                    <a href="{{url('register')}}">Register</a>
                    <a href="{{url('login')}}">Login</a>
                @endguest
            </div>
        </nav>

        <main class="mt-10 max-w-[1400px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
