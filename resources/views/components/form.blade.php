@section('form')
    <form action="{{ isset($task) ? route('task.update', ['task' => $task->id]) : route('task.store') }}" method="post">
        @csrf
        @isset($task)
            @method('put')
        @endisset
        @yield('input')
    </form>
@endsection
