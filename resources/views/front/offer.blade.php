@extends('layout.master')
@section('content')


             <form class="form" action="{{url('admin', 'apero')}}" method="POST" enctype="multipart/form-data">

            {{csrf_field()}}

                 <div class="form-group">
        <p>
            <label for="title">Titre:</label>
            <input id="title" type="text" name="title" value="">
            @if ($errors->has('title')) <span class="admin__error">{{$errors->first('title')}}</span>
            @endif
        </p>
                     </div>
                 <div class="form-group">
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{old('email')}}">
            @if ($errors->has('email')) <span class="admin__error">{{$errors->first('email')}}</span>
            @endif
        </p>
                     </div>
                 <div class="form-group">

        <p>
            <label for="date">Date de l'évènement:</label>
            <input type="date" name="date" value="">
            </input>
            @if ($errors->has('date')) <span class="admin__error">{{$errors->first('date')}}</span>
            @endif
        </p>
                     </div>
                 <div class="form-group">

        <p>
            <label for="category">Catégorie:</label>
            <select name="category_id">
                <option value=" "></option>
                @forelse($categories as $id => $title)
                    <option value="{{$id}}">{{$title}}</option>
                @empty
                    aucune catégorie
                @endforelse
            </select>
        </p>
                     </div>
                 <div class="form-group">

        <p>
            <label for="description">Description:</label>
            <textarea type="text" name="content" value="">
            </textarea>
            @if ($errors->has('content')) <span class="admin__error">{{$errors->first('content')}}</span>
            @endif
        </p>
                     </div>
                 <div class="form-group">

        <p>
            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            @forelse($tags as $id =>$name)

                <label for="{{$id}}" class="checkbox-inline">{{$name}}</label>
                <input type="checkbox" name="tags[]" value={{$id}}>


            @empty
                aucun mot clé
            @endforelse
        </p>
                     </div>
                 <div class="form-group">

        <p>
            <label for="image">Image:</label>
            <input type="file" name="media"><br>
            @if($errors->has('media'))
                <span class="admin_error">
               {{$errors->first('media')}}
            </span>
            @endif
        </p>
                     </div>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <input class="btn btn-primary" type="submit" value="Ajouter">
    </form>


@endsection