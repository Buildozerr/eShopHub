<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <form action="/attributes/store" method="post">
            @csrf
            <p>name</p>
            <input type="text" placeholder="name" name="name">
            <input type="submit" value="create">
        </form>
    </body>
</html>
