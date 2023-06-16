@extends('layout')


@section('content')

<form action="/todos" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="Todo" class="form-label">Todo</label>
      <textarea class="form-control" name="Todo" id="" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
