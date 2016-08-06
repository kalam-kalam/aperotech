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
                                    <img src="{{url('assets', ['images', $apero->uri])}}" alt="">
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
                    <p>Notre positionnement : le conseil en infrastructure web. Votre plateforme est prise en charge de
                        la conception à son exploitation, jusqu’au changement.
                        Oxalide a conçu son offre de services pour mettre votre application et vos objectifs au centre
                        de toutes les attentions. Conscient des contraintes et challenges du web, vos développements
                        peuvent s’appuyer sur notre savoir, savoir-faire et une infrastructure, pour une meilleure
                        efficience applicative.
                        « Oxalide n’est pas un vendeur de serveurs, mais un créateur de valeur dans la gestion de votre
                        plateforme web »</p>
                    <p>Contacts</p>
                </aside>

            </div>
        </div>
    </div>





    @endif
@endsection