@extends('layout.layout')

@extends('components.modal')
@extends('components.form')
@extends('components.input')
@include('components.button')
@include('components.task')

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
                @yield('task')
            </ul>
        </div>
    </div>
@endsection
