<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>

<body>

    <div class=" navbar navbar-inverse navbar-static-top">

        <div class="container">
                <a href="{{url ('admin', ['apero'])}}" class="navbar-brand">Hello Admin</a>

            <button class= "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                <div class = "collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"> <a href={{url("/")}}>SITE PUBLIC </a></li>
                        <li class="active"> <a href="{{route('admin.apero.create')}}">AJOUTER UN APERO</a></li>
                        <li class="active"> <a href="{{url("login")}}">SE DECONNECTER</a></li>
                    </ul>
                </div>


        </div>


    </div>


<div class="container grid-2-1">
    <section>
        @yield('content')
    </section>
</div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>