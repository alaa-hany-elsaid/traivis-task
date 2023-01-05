<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<section style="background-color: #f7f6f6;">
    <div class="container my-5 py-5 text-dark">
        <div class="row d-flex justify-content-center align-items-start flex-wrap ">
            @foreach(\App\Models\Post::all() as $post)
                <div class="col-12 my-2">
                    <livewire:blog.components.post.container :wire:key="\Illuminate\Support\Str::random()"
                                                             :post="$post"/>


                </div>
                <hr/>
            @endforeach
        </div>
    </div>
</section>

@livewireScripts
</body>
</html>
