@extends('layout.master')

@section('content')

    <h2>{{$apero->title}}</h2>

    <div class="content">
        {{$apero->created_at}}
    </div>

    <div class="content">
        {{$apero->content}}
    </div>

    @if(!empty($apero->uri))
        <div class="thumbnail">
            <img src="{{url('assets', ['images', $apero->uri])}}" alt="" >
        </div>
    @endif

@endsection