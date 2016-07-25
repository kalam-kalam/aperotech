@extends('layout.master')
@section('content')

    <form action="{{url('front', 'apero')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <p>
            <label for="title">Titre:</label>
            <input id="title" type="text" name="title" value="">
            @if ($errors->has('title')) <span class="admin__error">{{$errors->first('title')}}</span>
            @endif
        </p>

        <p>
            <label for="content">Contenu:</label>
            <textarea type="text" name="content" value="">
            </textarea>
            @if ($errors->has('content')) <span class="admin__error">{{$errors->first('content')}}</span>
            @endif
        </p>

        <p>
            <label for="abstract">Abstract:</label>
            <textarea type="text" name="abstract" value="">
            </textarea>
            @if ($errors->has('content')) <span class="admin__error">{{$errors->first('abstract')}}</span>
            @endif
        </p>

        <input type="file" name="media"><br>

        @if($errors->has('media'))
            <span class="admin_error">
               {{$errors->first('media')}}
            </span>
        @endif


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <input type="submit">
    </form>
@endsection