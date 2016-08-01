@extends('layout.admin')
@section('content')

    <form action="{{route('admin.apero.update', [$apero->id])}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <p>
            <label for="title">Titre:</label>
            <input id="title" type="text" name="title" value="{{"$apero->title"}}">
            @if ($errors->has('title')) <span class="admin__error">{{$errors->first('title')}}</span>
            @endif
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{old('email')}}">
            @if ($errors->has('email')) <span class="admin__error">{{$errors->first('email')}}</span>
            @endif
        </p>

        <p>
            <label for="date">Date de l'évènement:</label>
            <input type="date" name="date" value="{{$apero->date}}">
            </input>
            @if ($errors->has('date')) <span class="admin__error">{{$errors->first('date')}}</span>
            @endif
        </p>

        <p>
            <label for="category">Catégorie:</label>

            <select name="category_id">
                @foreach($categories as $id => $name)
                    <option
                        value="{{$id}}"
                    {{(!is_null($apero->category) && ($apero->category->id == $id))? 'selected': '' }}>
                    {{$name}}
                    </option>

                @endforeach
            </select>
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
            @if ($errors->has('abstract')) <span class="admin__error">{{$errors->first('abstract')}}</span>
            @endif
        </p>

        <p>
            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>

            @foreach($tags as $id =>$name)
            <label class="checkbox-inline" for="{{$id}}"> {{$name}}</label>
            <input

                    @foreach($apero->tags as $tag)
                    {{$tag->id==$id? 'checked' : ''}}

                    @endforeach
                    id="{{$id}}" type="checkbox" name="tags[]" value="{{$id}}">
                @endforeach

        </p>

        @if($apero->uri)

            <img src="{{url('assets', ['images', $apero->uri])}}" alt="{{$apero->title}}" >
            <input type="checkbox" name="delete_media"> Supprimer <br>
            Modifier l'image <input type="file" name="media">

        @else
            <input type="file" name="media">
        @endif

        <p>
            <input type="radio" name="status" value="published">Publié
            <input checked type="radio" name="status" value="unpublished">Dépublié
        </p>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <input type="submit" value="Modifier">
    </form>
@endsection