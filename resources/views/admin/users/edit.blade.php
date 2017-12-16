@extends('layout')

@section('content')
<div class="col-xs-6">
    {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}

        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
        @endif

        <div class="form-group">
            {!! Form::label('name', "Name:") !!}
            {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', "Email:") !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
    </div>
@endsection