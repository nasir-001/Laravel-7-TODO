@extends('todos.layout')

@section('body')
<div class="text-center mt-5">
    <div class="row flex justify-content">
        <div class="col-3">

        </div>
        <div class="col-6">
            <h1>All Your Todos</h1>
        </div>
        <div class="cols">
            <a class="btn btn-success text-left"  href="/todos/create"><span class="fas fa-plus-circle"></a>
        </div>
    </div>
  
    <ul class="mt-4 list-group">
        <x-alert />
        @foreach ($todos as $todo)
           
            <li style="list-style: none" class="list-group flex justify-content mt-3">

                <div class="row">
                    
                    <div class="col-lg-4 text-right">
                        @include('todos.completeBotton')
                    </div>
                    <div class="col-3">
                        @if ($todo->completed)
                            <h4 class="list-group-item" style="text-decoration: line-through">{{ $todo->title }}</h4>
                        @else
                            <h4 class="list-group-item">{{ $todo->title }}</h4>
                        @endif
                        
                    </div>
                    <div class="cols">
                        
                        <a href="{{ '/todos/'.$todo->id.'/edit' }}" class="btn btn-outline-info display-inline"><span class="fas fa-edit"></a>
                        <a href="{{ '/todos/'.$todo->id.'/edit' }}" class="btn btn-outline-danger display-inline" onclick="event.preventDefault();
                        document.getElementById('form-delete-{{ $todo->id }}').submit();
                        "><span class="fas fa-trash"></a>
                        <form style="display: none" method="post" id="{{ 'form-delete-'.$todo->id }}" action="{{ route('todo.delete', $todo->id) }}">
                            @csrf
                            @method('delete')
                        </form>
                        
                    </div>
                    
                </div>
            
            </li>
        @endforeach
    </ul>
       
</div>
@endsection