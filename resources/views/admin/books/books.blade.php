<div class="form-group">
<a class="btn btn-primary" href="{{route('books.create')}}"> Dodaj książke</a>
</div>
     
    
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Year</th>
        <th>EDIT</th>
        <th>DELETE</th>
        <th></th>
    </tr>

    @foreach($data['books'] as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->year }}</td>
        <td><a class="btn btn-info" href="{{route('books.edit',$book)}}">Edit</a></td>
        <td>
            {!! Form::model($book, ['route' => ['books.delete', $book], 'method' => 'DELETE']) !!}
            <button class="btn btn-danger">Delete</button>
            {!! Form::close() !!}    
        </td>
        <td><a class="btn btn-info" href="{{ asset('download/'.$book->title.'.pdf') }}">Download</a></td>
    </tr>
    @endforeach
</table>
{{$data['books']->links()}}
