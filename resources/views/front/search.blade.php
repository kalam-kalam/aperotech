@extends('layout.master')
@section('content')
    {!!$aperos->links()!!}
    <h4>Entrez un mot clé</h4>

    <form method="get" action="{{url('search')}}" class="navbar-form navbar" role="search">
        <div class="form-group">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" placeholder="Entrez un mot-clef" name="the_search" class="form-control">
        </div>
    </form>




    @if((count($aperos)>=1))

        @foreach($aperos as $apero)
            <h3><a href=" {{url('apero',$apero->id)}}">{{$apero->title}}</a></h3>
            <p>{{$apero->abstract}}</p>
        @endforeach

    @elseif((count($tags)>=1))

        @foreach($tags as $tag)
            @foreach($tag->aperos as $apero)
                <h3><a href="{{url('apero',$apero->id)}}">{{$apero->title}}</a></h3>
                {{$apero->content}}
            @endforeach
        @endforeach

    @endif







    {!!$aperos->links()!!}

@endsection