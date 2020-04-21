@extends('layouts.app')
@section('content')
<div class="container">
    <H2>Edit Item</H2>
        {{ Form::open(['action' => ['RequestController@update', $item->id ], 'method' => 'post'] )}}
        {{Form::hidden('_method', 'PUT')}}
        <div class="form-group">
        {{ Form::label('text', 'Text')}}
        {{ Form::text('text', $item->text ,['class' => 'form-control', 'placeholder' => $item->text]) }}
        </div>
        <div class="form-group">
        {{ Form::label('body', 'Body')}}
        {{ Form::text('body', $item->body,['class' => 'form-control', 'placeholder' => $item->body]) }}
        </div>
        <button  type="submit" class="btn btn-primary" name="button">Update</button>
        {{Form::close()}}
</div
@endsection