@extends('layout')

@section('content')

<form action="/todos/{{$todo->id}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" name="name" class="form-control" value="{{$todo->name}}" required>
    </div>
    <div class="mb-3">
      <label for="Todo" class="form-label">Todo</label>
      <textarea class="form-control" name="Todo" id="" cols="30" rows="10">{{$todo->Todo}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
