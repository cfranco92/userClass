<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Home Page')</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/customStyle.css') }}">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            {{-- <nav class="navbar navbar-light bg-white shadow-sm"> --}}
                <div class="container">
                    <a class="navbar-brand" href="">
                        {{ config('app.name', 'Laravel')}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- Future authentication Links -->
                            <ul>
                                <a href="">Users</a>
                                <a href=" {{ route('user.create') }}">Create</a>
                            </ul>
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
    
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
