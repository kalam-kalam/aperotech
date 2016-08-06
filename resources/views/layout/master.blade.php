<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Layout</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
<body>

<div class=" navbar navbar-inverse navbar-static-top">

    <div class="container">

        <div class="navbar-header">
            <a href="#" class="navbar-brand">AperoTech</a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">

                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">


                <li><a class="active" href={{url("/")}}> ACCUEIL</a></li>
                <li><a class="active" href={{url("search")}}> CHERCHER UN APERO</a></li>
                <li><a class="active" href="{{url('front', ['apero', 'create'])}}">PROPOSER UN APERO</a></li>
                <li><a class="active" href="{{url("login")}}">SE CONNECTER</a></li>

            </ul>


        </div>

    </div>


</div>


</div>


<div class="container grid-2-1">
    <section>
        @include('admin.partials.flash_message')
        @yield('content')
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>