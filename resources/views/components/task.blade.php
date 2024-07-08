 @section('task')
     @forelse($tasks as $task)
         <li class="list-group-item d-flex justify-content-between align-items-center">
             <div class="task-info">
                 <form action="{{ route('task.complete', ['task' => $task]) }}" method="POST" class="d-inline">
                     @csrf
                     @method('PATCH')
                     <input class="form-check-input" id="flexCheck" type="checkbox" class="mr-4"
                         {{ $task->completed ? 'checked disabled' : '' }} onchange="this.form.submit()">
                 </form>
                 @php
                     $currentTask = request()->route('task');
                 @endphp
                 @if ($task->completed)
                     <span class="task-name text-muted">{{ $task->name }}</span>
                 @else
                     @if ($currentTask == $task)
                         <a class="link-dark link-underline-info link-offset-2 link-underline-opacity-20 link-underline-opacity-0-hover"
                             href="{{ route('task.edit', ['task' => $task]) }}">{{ $task->name }}</a>
                     @else
                         <a class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover"
                             href="{{ route('task.edit', ['task' => $task]) }}">{{ $task->name }}</a>
                     @endif
                 @endif
             </div>
         </li>
     @empty
         <div>There are no tasks!</div>
     @endforelse
 @endsection
