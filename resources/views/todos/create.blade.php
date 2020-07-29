@extends('todos.layout')

@section('body')
    <h1>What next you need TO-DO</h1>
    <x-alert />
    <form action="/todos/create" method="post" class="form-group">
        @csrf
        <div class="row">
            
            <div class="col-4">

            </div>
            <div class="col-3">
                <input class="form-control" type="text" name="title" />
            </div>
        
            <div class="cols">
                <input type="submit" class="btn btn-secondary" value="Create" />
            </div>
        </div>
    </form>
    <a href="/todos" class="btn btn-info">Back</a>
@endsection