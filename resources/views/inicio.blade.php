<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IR Tintas</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <header>
            <img class="logo" src="{{ asset('logo.png') }}" alt="logo-ir-tintas"/>
            <ul class="menu-inicio">
                <li>Início</li>
                <li>Produtos</li>
                <li>Contato</li>
            </ul>
            <div class="login">
                <ul>
                    <li>Entrar</li>
                    <li>Cadastrar-se</li>
                </ul>
            </div>
        </header>
        <section class="img-backdround">
        <img class=".bg-inicio" src="{{ asset('background-inicio.jpg') }}" alt="bg"/>
        </section>
    </body>
</html>
