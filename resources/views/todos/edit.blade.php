@extends('todos.layout')

@section('body')
    <h1>Update this todo</h1>
  
    <x-alert />
    <form action="{{ route('todo.update', $todo->id) }}" method="post" class="form-group">
        @csrf
        @method('patch')
        <div class="row">
            
            <div class="col-4">

            </div>
            <div class="col-3">
                <input class="form-control" value="{{ $todo->title }}" type="text" name="title" />
            </div>
        
            <div class="cols">
                <input type="submit" class="btn btn-secondary" value="Update" />
            </div>
        </div>
    </form>
    <a href="/todos" class="btn btn-info">Back</a>
@endsection
