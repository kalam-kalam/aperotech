@extends('layout.master')

@section('content')
    <h1>Vos 3 prochains aperos</h1>
    @if(!empty($aperos))

        @foreach ($aperos as $apero)

            <h2><a href=" {{url('apero',$apero->id)}}"> {{$apero->title}}</a></h2>


                    {{"Prévu le : ".$apero->date}}

                    @if(!empty($apero->uri))
                        <div class="thumbnail">
                        <img src="{{url('assets', ['images', $apero->uri])}}" alt="" >
                        </div>
                     @endif


                    <p>{{$apero->content}}</p>

                    <p>{{$apero->abstract}}</p>


                @foreach($apero->tags as $tag)
                    {{$tag->name}}

                @endforeach

                @foreach($categories as $category)
                    @if ($category->id == $apero->category_id)
                    {{$category->name}}
                    @endif

                @endforeach


               @endforeach



    @endif
    @endsection