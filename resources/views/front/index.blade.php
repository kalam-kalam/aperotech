@extends('layout.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
        <h1>Vos 3 prochains aperos</h1>
            @if(!empty($aperos))

                @foreach ($aperos as $apero)

                    @if($apero->status == 'published')

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

            @endif



        @endforeach
                </div>

            <div class="col-md-1">

            </div>


        <div class="col-md-3">
<aside>
            <h2>Aperotech </h2>
            <p>Aperotech est une association blabla</p>
            <p>Contacts</p>
</aside>

        </div>
            </div>
        </div>





    @endif
    @endsection