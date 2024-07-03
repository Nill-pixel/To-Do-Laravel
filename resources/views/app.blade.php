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
                <h1>Gerenciador de Tarefas</h1>
                <input type="text" class="form-control my-3" placeholder="Buscar Tarefas...">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <!-- Example Task -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="task-info">
                            <input type="checkbox" class="mr-3">
                            <span class="task-title">Tarefa Exemplo</span>
                        </div>
                        <div class="task-actions">
                            <button class="btn btn-sm btn-primary">Editar</button>
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </div>
                    </li>
                    <!-- Repeat for more tasks -->
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
