@extends('layout')
@section('content')
<a class="btn btn-primary" href="{{route('books.create')}}"> Dodaj książke</a>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title  }}</td>
        <td><a class="btn btn-info" href="{{route('books.edit',$book)}}">Edit</a></td>
        <td>
            {!! Form::model($book, ['route' => ['books.delete', $book], 'method' => 'DELETE']) !!}
            <button class="btn btn-danger">Delete</button>
            {!! Form::close() !!}    
        </td>
    </tr>
    @endforeach
</table>
{{$books->links()}}
@endsection