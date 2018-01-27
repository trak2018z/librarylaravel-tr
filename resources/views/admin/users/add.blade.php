@extends('layout')

@section('content')
<div class="col-xs-6">
{!! Form::open(['route'=>'users.store','files'=>'true'])!!}

        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
        @endif

        <div class="form-group">
            {!! Form::label('name', "Name:") !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', "Email:") !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', "Password:") !!}
            {!! Form::text('password', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
           
        </div>
         <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
    </div>
@endsection