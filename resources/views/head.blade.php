<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Molisana</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <img src="{{ asset('../img/logo.png') }}" alt="">
            </div>
            <div class="link-container">
                <div class="links">
                    <a href="/">Home</a>
                    <a href="prodotti">Prodotti</a>
                    <a href="contatti">Contatti</a>
                </div>
            </div>
        </div>
    </div>