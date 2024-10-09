@extends('layouts.layout')
@section('content')
    <h1>Delete task</h1>
    <form action="{{ route('task.delete', ['id' => $id]) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" class="btn btn-primary">Yes</button>
        <a href="/" class="btn btn-primary">No</a>
    </form>@endsection
