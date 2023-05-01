@extends('layout')

@section('title')Edit Todo @endsection

@section('content')
<div class="container my-4">
  <h1 class="font-weight-bold">Edit Todo</h1>
  <form method="POST" action="{{ route('todo.update.submit', ['id' => $todo->id]) }}">

    @csrf

    <input type="hidden" name="id" value="{{ $todo->id }}">

    <div class="mb-3">
      <label for="todo" class="form-label">Enter Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="todo" name="title" placeholder="Todo Title" value="{{ $todo->title }}" required>
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="desc" class="form-label">Enter Description</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="desc" name="description" rows="4" required>{{ $todo->description}}</textarea>
      @error('description')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Edit Todo</button>
    </div>
  </form>
</div>
@endsection