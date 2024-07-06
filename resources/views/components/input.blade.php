@section('input')
    <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{ $task->name ?? old('name') }}" name="name" placeholder="Tarefa"
            aria-label="Tarefa" aria-describedby="basic-addon1">
        @yield('button')
    </div>
@endsection
