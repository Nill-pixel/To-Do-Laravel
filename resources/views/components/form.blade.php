@section('form')
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        @yield('input')
    </form>
@endsection
