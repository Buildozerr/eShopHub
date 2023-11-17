<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit</title>

    </head>
    <body class="antialiased">
        <h1>{{$attribute->name}}</h1>
        <form action="/attributes/{{$attribute->id}}/update" method="post">
            @csrf
            <p>name</p>
            <h3>Values</h3>
            @foreach ($attribute->attribute_values as $item)
                <h4>{{$item->name}}</h4>
            @endforeach
            <input type="text" name="name" placeholder="name" value="{{$attribute->name}}">
            <input type="submit" value="Update">
        </form>
    </body>
</html>