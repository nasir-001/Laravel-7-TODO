@if($todo->completed)
    <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{ $todo->id }}').submit()" class="fas fa-check fa-2x" style="color: green; cursor: pointer; padding-left: 10px;">
    <form style="display: none" method="post" id="{{ 'form-incomplete-'.$todo->id }}" action="{{ route('todo.incomplete', $todo->id) }}">
        @csrf
        @method('delete')
    </form>
@else
    <span onclick="event.preventDefault();document.getElementById('form-complete-{{ $todo->id }}').submit()" class="fas fa-check fa-2x" style="color: red; cursor: pointer; padding-left: 10px;">
    <form style="display: none" method="post" id="{{ 'form-complete-'.$todo->id }}" action="{{ route('todo.complete', $todo->id) }}">
        @csrf
        @method('put')
    </form>
@endif