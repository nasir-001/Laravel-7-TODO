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
                <input class="form-control" placeholder="Title" value="{{ $todo->title }}" type="text" name="title" />
            </div>
        
            <div class="cols">
                <input type="submit" class="btn btn-secondary" value="Update" />
            </div>

            <div class="container w-50">
                <textarea name="description" class="mt-3 form-control" placeholder="Description" cols="20" rows="10">{{ $todo->description }}</textarea>
            </div>
        </div>
    </form>
    <a href="/todos" class="btn btn-info">Back</a>
@endsection
