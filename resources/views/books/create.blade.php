@extends('layout')
@section('content')
{!! Form::open(['route'=>'books.store'])!!}

@if ($errors->any())
<ul class='alert alert-danger'>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<div class='form-group'>
    {!!Form::label('title',"Title:")!!}
    {!!Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('author', "Author:") !!}
    {!! Form::text('author', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year', "Year:") !!}
    {!! Form::number('year', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', "Description:") !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<div class='form-group'>
    {!!Form::submit("Zapisz",['class'=>'btn btn-primary'])!!}
    {!!link_to(URL::previous(),'Powrót', ['class'=>'btn btn-default'])!!}

</div>


{!! Form::close()!!}
@endsection