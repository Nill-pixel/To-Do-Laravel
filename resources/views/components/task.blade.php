 @section('task')
     @forelse($tasks as $task)
         <li class="list-group-item d-flex justify-content-between align-items-center">
             <div class="task-info">
                 <input type="checkbox" class="mr-4">
                 <span class="task-title m-4">{{ $task->name }}</span>
                 <input type="text" class="task-input form-control d-none" value="{{ $task->name }}">
             </div>
             <div class="task-actions">
                 <form action="{{ route('task.edit', ['task' => $task]) }}" method="GET">
                     @csrf
                     @method('get')
                     <button class="btn btn-sm btn-primary edit-btn" data-bs-toggle="modal"
                         data-bs-target="#save">Editar</button>
                 </form>
                 <button class="btn btn-sm btn-danger">Excluir</button>

             </div>
         </li>
     @empty
         <div>There are no tasks!</div>
     @endforelse
 @endsection
