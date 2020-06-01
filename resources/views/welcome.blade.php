<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Script -->
        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
   
    </head>

    <body >
    <div class="w-full flex border rounded justify-center">
        <div class="w-7/12 my-4 m-2  p-2 border rounded ">
            @livewire('posts')
        </div>    
        <div class="w-5/12 my-4 m-2  p-2 border rounded "> 
            @livewire('comments')
        </div>
    
    </div>
       
       
    </body>  
</html>
