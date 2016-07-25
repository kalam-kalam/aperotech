<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Layout</title>
</head>
<body>

<header>
    <banner>
        APEROS TECHNIQUES
    </banner>
    <nav>
        <a href={{url("/")}}>ACCUEIL</a>
        <a href={{url("search")}}>CHERCHER UN APERO</a>
        <a href="{{url('front', ['apero', 'create'])}}">PROPOSER UN APERO</a>
        <a href="{{url("login")}}">SE CONNECTER</a>
    </nav>
</header>

<div class="container grid-2-1">
    <section>
        @yield('content')
    </section>
</div>
<script src="{{url('')}}"></script>
<script src="{{url('')}}"></script>

</body>
</html>