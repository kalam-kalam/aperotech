<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>HELLO ADMIN</h2>

<input type="button" value="RETOUR AU SITE PUBLIC" href="{{route('front.home')}}"/>
<input type="button" value="DECONNEXION" href="{{'auth.login'}}"/>

<input type="button" value="AJOUTER UN APERO" href="{{'admin.create'}}"/>


</body>
</html>