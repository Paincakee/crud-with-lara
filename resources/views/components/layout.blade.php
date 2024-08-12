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
            <div>
                <a href="#">
                    <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/50/50" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold ">
                <a href="#" class="hover:underline">Projects</a>
                <a href="#" class="hover:underline">Users</a>
                <a href="#" class="hover:underline">About</a>
            </div>

            <div >
                <a href="#">Publish a Project</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[1400px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
