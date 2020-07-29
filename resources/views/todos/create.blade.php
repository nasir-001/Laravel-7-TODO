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
                <input type="submit" class="btn btn-secondary" placeholder="title" value="Create" />
            </div>
        </div>
        <div class="container w-50">
            <textarea name="description" class="mt-3 form-control" placeholder="Description" cols="20" rows="10"></textarea>
        </div>
    </form>
    <a href="/todos" class="btn btn-info">Back</a>
@endsection