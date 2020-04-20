@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Items</h2>
    @if(count($items)>0)
    <div class="list-group">
        @foreach($items as $item)
        <a href="request.index" class="list-group-item list-group-item-action ">
            <div class="d-flex w-100 justify-content-between ">
                <h5 class="mb-1">{{ $item->text }}</h5>
                <small >{{ $item->created_at }}</small>
            </div>
            <p class="mb-1">{{ $item->body }}</p>
        </a>
        @endforeach
    </div>
    @else
    <p>No items yet . . . </p>
    @endif
</div>
@endsection