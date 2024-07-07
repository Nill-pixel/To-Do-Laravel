 @section('task')
     @forelse($tasks as $task)
         <li class="list-group-item d-flex justify-content-between align-items-center">
             <div class="task-info">
                 <input class="form-check-input" type="checkbox" class="mr-4">
                 @php
                     $currentTask = request()->route('task');
                 @endphp
                 @if ($currentTask == $task)
                     <a class="link-dark link-underline-info link-offset-2 link-underline-opacity-20 link-underline-opacity-0-hover"
                         href="{{ route('task.edit', ['task' => $task]) }}">{{ $task->name }}</a>
                 @else
                     <a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover"
                         href="{{ route('task.edit', ['task' => $task]) }}">{{ $task->name }}</a>
                 @endif
             </div>
             <div class="task-actions">
                 {{-- <form action="{{ route('task.edit', ['task' => $task]) }}" method="GET">
                     @csrf
                     @method('get')
                     <button class="btn btn-sm btn-primary edit-btn" data-bs-toggle="modal"
                         data-bs-target="#save">Editar</button>
                 </form>
                 <button class="btn btn-sm btn-danger">Excluir</button> --}}

             </div>
         </li>
     @empty
         <div>There are no tasks!</div>
     @endforelse
 @endsection
