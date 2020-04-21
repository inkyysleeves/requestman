@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-3 mb-3 font-weight-bold"><u>Items</u></h2>
    @if(count($items)>0)
    <div class="list-group">
        @foreach($items as $item)
        <a href="{{ route('request.index') }}/{{ $item->id }}/edit" class="list-group-item list-group-item-action ">
            <div class="d-flex w-100 justify-content-between ">
                <h5 class="mb-1">{{ $item->text }}</h5>
                <small>{{ $item->created_at }}</small>
            </div>
            {{ Form::open (['action' => ['RequestController@destroy', $item->id], 'method' => 'POST'])}}
                <button type="submit" name="button" class="btn btn-danger float-right">Delete</button>
                {{ Form::hidden('_method', 'DELETE')}}
                {{ Form::close() }}
            <p class="mb-1">{{ $item->body }}</p>
        </a>
        @endforeach
    </div>
    @else
    <p>No items yet . . . </p>
    @endif
</div>
@endsection