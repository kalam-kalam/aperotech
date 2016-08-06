<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
</head>

<body>

<div class=" navbar navbar-inverse navbar-static-top">

    <div class="container">


        <a class="navbar-brand" href="{{url('admin/apero')}}">Hello {{Auth::user()->username}}</a></div>

    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href={{url("/")}}>SITE PUBLIC </a></li>
            <li class="active"><a href="{{route('admin.apero.create')}}">AJOUTER UN APERO</a></li>
            <li class="active"><a href="{{url("login")}}">SE DECONNECTER</a></li>
        </ul>
    </div>


</div>


</div>


<div class="container grid-2-1">
    <section>
        @include('admin.partials.flash_message')
        @yield('content')
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{{url('assets/js/app.min.js')}}"></script>


</body>
</html>