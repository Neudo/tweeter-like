<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Twitter Like</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="antialiased bg-blue-600" style=" min-height:100vh; background: linear-gradient(43deg, rgba(7,0,121,1) 0%, rgba(40,40,176,1) 46%, rgba(0,212,255,1) 100%); color: white; font-family: sans-serif">

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-600 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-center text-red-700" style="font-size: 70px; text-align: center">Twitter like</h1>
                <p class="text-center p-6 text-red-700" style="text-align: center; font-size: 24px">Partager votre vie... avec pas beaucoup de monde.</p>
            </div>
            <div class="links" style="width: 40%; margin:60px auto;display: flex;justify-content: space-between; background-color: #2a33b6; padding: 40px;box-shadow: 2px 1px 17px 0px white;">
                <a style="text-decoration: none; padding: 30px 70px; color: white; font-weight: bold" href="{{ route('login') }}">Se connecter</a>
                <a style="text-decoration: none; padding: 30px 70px; color: white; font-weight: bold" href="{{ route('register') }}">S'inscrire</a>
            </div>
        </div>
    </div>
</div>
</body>
