@extends('layouts.app')
@section('content')
<div class="container">
    <H2>Insert new Item</H2>
        @csrf
        {{ Form::open(['action' => 'RequestController@store', 'method' => 'post'] )}}
        <div class="form-group">
        {{ Form::label('text', 'Text')}}
        {{ Form::text('text','',['class' => 'form-control', 'placeholder' => 'Enter text']) }}
        </div>
        <div class="form-group">
        {{ Form::label('body', 'Body')}}
        {{ Form::text('body','',['class' => 'form-control', 'placeholder' => 'Enter body']) }}
        </div>
        <button class="btn btn-primary">submit</button>
        {{Form::close()}}
</div>
@endsection