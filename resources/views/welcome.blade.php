<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <form action="/download-demo-pdf" method="POST" class="m-2">
            @csrf
            <button type="submit" class="bg-blue-500 p-4 text-white text-2xl rounded-md">Download Demo PDF</button>
        </form>

    </body>
</html>
