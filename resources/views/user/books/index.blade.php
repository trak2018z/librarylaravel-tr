@extends('layout')
@section('content')
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Year</th>
        <th></th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->year }}</td>
        <td><a class="btn btn-info" href="{{ asset('download/'.$book->title) }}">Download</a></td>
    </tr>
    @endforeach
</table>
{{$books->links()}}
@endsection