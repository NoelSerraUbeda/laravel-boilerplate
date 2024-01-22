<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <!-- Codificación de carácteres -->
        <meta charset="utf-8">
        <!-- Responsive -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1245/1245778.png">

        <!-- Etiquetas con proposito de SEO, el título y la descripción aparecerán en los resultados de Google,
        la etiqueta keywords se ha quedado obsoleta -->
        <title>Panel de Administración</title>
        <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" content="palabras clave, separadas, por comas">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Compartir redes sociales -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Título" />
        <meta property="og:description" content="descripción de la web, se recomienda 90 caracteres" />
        <meta property="og:image" content="https://cdn-icons-png.flaticon.com/512/1245/1245778.png" />

        <!-- Fuentes de la web -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <!-- Documentos enlazados -->
        @vite(['resources/sass/auth-app.scss'])
    </head>

    <body>        
        <main>
            @yield('content')
        </main>
    </body>
</html>