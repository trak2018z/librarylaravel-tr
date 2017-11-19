@extends('layout')

@section('content')

    {!! Form::model($book, ['route' => ['books.update', $book], 'method' => 'PUT']) !!}

        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
        @endif

        <div class="form-group">
            {!! Form::label('title', "Title:") !!}
            {!! Form::text('title', $book->title, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('author', "Treść:") !!}
            {!! Form::textarea('author', $book->author, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@endsection