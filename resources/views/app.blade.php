@extends('layout.layout')

@extends('components.modal')
@extends('components.form')
@extends('components.input')
@include('components.button')
@include('components.task')

@section('title', 'Gerenciador de tarefas')
@section('content')
    <div class="row mb-3">
        <div class="position-relative container text-center m-5">
            @if (session()->has('success'))
                <div class="position-absolute top-0 start-50 translate-middle-x alert alert-info col-sm-7" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            @if (isset($task))
                <button data-bs-toggle="modal" data-bs-target="#save" class="btn btn-outline-info">Editar</button>
                <form action="{{ route('task.destroy', ['task' => $task]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Apagar</button>
                </form>
            @else
                <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#save">
                    Adicionar Tarefa
                </button>
            @endif
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

@section('scripts')
    @if (isset($task))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('save'), {
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
@endsection
