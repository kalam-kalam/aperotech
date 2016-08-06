@extends('layout.master')

@section('content')

    <form class="form-horizontal" action="{{url('login')}}" method="POST">

        {{csrf_field()}}

        <div class="form-group">
            <p>
                <label class="col-sm-2" for="username"> <span class="étoile">*</span>Identifiant:</label>
            <div class="col-sm-10">
                <input type="text" name="username" value="{{old('username')}}">
                @if($errors->has('username')) <span> {{$errors->first('username')}}</span>
                @endif
            </div>
            </p>

        </div>
        <div class="form-group">

            <p>
                <label class="col-sm-2" for="password"><span class="étoile">*</span>Mot de passe:</label>
            <div class="col-sm-10">
                <input type="password" name="password">
                @if($errors->has('password')) <span>{{$errors->first('password)')}}</span>
                @endif
            </div>
            </p>
        </div>

        <input class="btn btn-primary" type="submit">

    </form>

@endsection