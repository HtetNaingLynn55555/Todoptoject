@extends('layout')

@section('content')

        <a href="todos/create" class="btn btn-primary mt-5"> Create New Todo List </a>
        <div class="card text-center mt-5">
            <div class="card-header">
            Todo List
            </div>
            @foreach ($todos as $todo )

            <div class="card-body">
                <h5 class="card-title">{{$todo->name}}</h5>
                <p class="card-text">{{$todo->Todo}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <a href="todos/{{$todo->id}}" class="btn btn-success">View Details</a>
                <a href="todos/{{$todo->id}}/edit" class="btn btn-success">Edit</a>
                <form action="todos/{{$todo->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
            </div>


            @endforeach

        </div>
@endsection
