<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-800">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-white text-4xl">Päivää!</h1>
        <div id="app">
            <example-component></example-component>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
