@extends('layout')

@section('title')Home @endsection

@section('content')
<div class="container my-4">
  <h1 class="font-weight-bold">Add Todo</h1>
  <form method="POST" action="{{ route('todo.store') }}">
@csrf
    <div class="mb-3">
      <label for="todo" class="form-label">Enter Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="todo" name="title" placeholder="Todo Title" value="{{ old('title') }}">
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="desc" class="form-label">Enter Description</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="desc" name="description" rows="4">{{ old('description') }}</textarea>
      @error('description')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Add Todo</button>
    </div>
  </form>

  <div class="table-responsive my-4">
    <h2 class="my-4">Todo List</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Created At</th>
          <th scope="col">Last Updated</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($todos as $todo)
        <tr>
          <th scope="row">{{ $loop->index + 1 }}</th>
          <td>{{$todo->title}}</td>
          <td>{{$todo->description}}</td>
          <td>{{$todo->created_at}}</td>
          <td>{{$todo->updated_at}}</td>
          <td><a class="btn btn-success" href="{{ route('todo.update', ['id' =>$todo->id]) }}">Update</a></td>
          <td><a class="btn btn-danger" href="{{ route('todo.delete', ['id' =>$todo->id]) }}">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection