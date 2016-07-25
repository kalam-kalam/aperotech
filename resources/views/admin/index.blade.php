@extends('layout.admin')
@section('content')


    <table>
        <tr>
            <th> </th>
            <th>TITRE</th>
            <th>AUTEUR</th>
            <th>DATE DE PUBLICATION</th>
            <th> </th>
        </tr>

        <tr>
        <tr>
            @foreach ($aperos as $apero)
                <td>
                    <input type="submit" value="Publié">
                    {{-- if yes  css green / if no css black--}}
                </td>
                <td>
                    {{$apero->title}}
                </td>
                <td>
                    @foreach ($users as $id => $username)
                        {{ $user->id == $id? $username : ' ' }}
                    @endforeach
                </td>
                <td>
                    {{$apero->created_at}}
                </td>
                <td>
                    <input type="submit" value="Supprimer">
                </td>
            @endforeach

        </tr>



    </table>

@endsection