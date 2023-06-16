@extends('layout')


@section('content')

<div class="card text-center mt-5">
    <div class="card-header">
    Todo List
    </div>


    <div class="card-body">
        <h5 class="card-title">{{$todo->name}}</h5>
        <p class="card-text">{{$todo->Todo}}</p>

        <a href="/todos" class="btn btn-success">Back</a>
    </div>



</div>

@endsection
