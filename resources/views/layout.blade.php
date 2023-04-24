<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica Recordatorios</title>

    @vite(['resources/js/app.js','resources/css/app.scss'])

   @livewireStyles
    <link rel="stylesheet" href="{{asset('vendor/boxy/boxy.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free-6.1.1-web/css/all.css')}}">
   {{-- <link rel="stylesheet" href="https://boxy.pages.dev/css/boxy.min.css"/> --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css"/>
</head>
<body>
    <header class="b-header" gradient bg="black">
        <a href="/" class="b-header-logo">AppsCode</a>
        <div class="b-header-content">
            <div class="b-header-fixed">
                <a href="/statusreminders" class="b-btn-neon fw-bold" rd="lg" color="blue">Crear Estados</a>
                <a href="/reminders" class="b-btn-neon fw-bold" rd="lg" color="blue">Recordatorios</a>
            </div>
        </div>
        {{-- <div class="b-header-fixed">
          <a href="https://github.com/hetziel/boxy" class="b-btn" color="default"><i class="fa-brands fa-github"></i> Github</a>
        </div> --}}
    </header>
    @yield('content')

    @livewireScripts
    <script type="text/javascript" src="{{asset('vendor/boxy/boxy.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/fontawesome-free-6.1.1-web/js/all.js')}}"></script>
    <script>boxyVersion(true)</script>
</body>
</html>
