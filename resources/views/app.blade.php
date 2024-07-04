@extends('layout.layout')
@extends('modal')
@section('title', 'Gerenciador de tarefas')
@section('content')
    <div class="row mb-3">
        <div class="col-12">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#save">
                Adicionar Tarefa
            </button>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
            <ul class="list-group">
                <!-- Task -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="task-info">
                        <input type="checkbox" class="mr-3">
                        <span class="task-title">Tarefa</span>
                        <input type="text" class="task-input form-control d-none" value="Tarefa">
                    </div>
                    <div class="task-actions">
                        <button class="btn btn-sm btn-primary edit-btn">Editar</button>
                        <button class="btn btn-sm btn-success save-btn d-none">Salvar</button>
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
