<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>@yield('title')</h1>
                <input type="text" class="form-control my-3" placeholder="Buscar Tarefas...">
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
