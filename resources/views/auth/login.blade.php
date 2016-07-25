@extends('layout.master')

@section('content')

    <form action="{{url('login')}}" method="POST" >

        {{csrf_field()}}

        <p>
            <label for="username">Identifiant:</label>
            <input type="text" name="username" value="">
            @if($errors->has('username')) <span> {{$errors->first('username')}}</span>
            @endif
        </p>
        <p>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password">
            @if($errors->has('password')) <span>{{$errors->first('password)')}}</span>
            @endif
        </p>


        <input type="submit">

    </form>

@endsection