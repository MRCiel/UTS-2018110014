<!doctype html>
<html lang="en">

<head>

    <div class="card-header bg-dark py-4 text-white mt-4 ">
        <center>
            <img class="card-img-center flex-auto d-none d-md-block" data-src="holder.js/387x120?theme=thumb"
                alt="Thumbnail [387x120]" style="width: 387px; height: 120px;" src="{{ 'img/logo/pokedex-logo.png' }}"
                data-holder-rendered="true">
        </center>

    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
</head>
<center>
    @foreach ($pokemons as $item)
        <a href="/detail{{ $item->id }}-1" class="btn btn-primary" role="button">Sebelum</a>
        <a href="/detail{{ $item->id }}+1" class="btn btn-primary" role="button">Sesudah</a>
    @endforeach
</center>
