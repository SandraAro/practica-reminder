<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/js/app.js','resources/css/app.scss'])

   @livewireStyles
   <link rel="stylesheet" href="https://boxy.pages.dev/css/boxy.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css"/>
</head>
<body>
    @yield('content')

    @livewireScripts
    <script type="text/javascript" src="https://boxy.pages.dev/js/boxy.min.js"></script>
    <script>boxyVersion(false)</script>
</body>
</html>
