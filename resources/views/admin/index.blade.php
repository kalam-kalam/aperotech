@extends('layout.admin')

@section('content')
    {!!$aperos->links()!!}

    <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Publication</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date de création</th>

        </tr>

            @foreach ($aperos as $apero)
            <tr>
                <td>

                        <form action="{{route('admin.publishstatus.update', [$apero->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @if($apero->status === 'unpublished')
                                <input class="btn btn-default" id= "dépublié" type="submit" value="Publier">
                            @else

                                <input class="btn btn-success" id="publié" type="submit" value="Dépublier">
                            @endif
                        </form>


                    {{-- if yes  css green / if no css black--}}
                </td>
                <td>
                    <a href="{{url ('admin', ['apero',$apero->id,'edit'])}}">{{$apero->title}}</a>
                </td>
                <td>
                    @foreach($users as $user)
                        @if ($user->id == $apero->user_id)
                            {{$user->username}}
                        @endif

                    @endforeach

                </td>
                <td>
                    {{$apero->created_at->format('d,M,Y')}}
                </td>
                <td>

                    <form class="delete" action="{{route('admin.apero.destroy', [$apero->id])}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input class="btn btn-danger" type="submit" value="Supprimer">
                    </form>

                </td>
            </tr>
            @endforeach

    </table>

        </div>

    {!!$aperos->links()!!}
@endsection