Sujet Aperotech

->INSTALLATION DU PROJET

*Création d'un nouveau projet nommé Aperotech
  Composer create-project  laravel/laravel Aperotech
  cd /Applications/MAMP/htdocs/Aperotech

*Création d'un dépôt Git et d'un dépôt github
  Pour le partage des fichiers ainsi que la gestion des différentes versions du projet (suivi de l'évolution du projet et conservation des anciennes versions sous forme de commits)
  git init
  Création de deux branches principales admin et front mergées sur la branche master (cette dernière et pushée en fin de projet sur le dépôt github).
  Création d'une branche pour la sécurité
  Création d"une branche pour les vues et le style (bootstrap, responsive)
  Création de quelques branches apportant des corrections finales au fonctionnement du projet.

  (Toutes les branches comprennent un premier commit vide dont le nom commence par 'start' qui ne sert qu'à rendre la branche fonctionnelle avant qu'elle ne possède de contenu.)

*Database
   connexion: commande terminal: mysql -u root -p --database Aperotech
   mot de passe root
   Voir tous les paramètres dans le fichier .env à la racinne de l'application.
   Création de tables : php artisan create_table
   Création des seeders : php artisan make:seeder
   Création des caractèristiques des seeder dans Factory -> Model Factory


*Mise en place d'un fichier install sh
    Celui-ci permet la reconstruction à l'identique de toute la base de donnée, tables et seeders (faux contenu pour alimenter la base de donnée en attendant la mise en place réelle du site)
    Il sera activé en ligne de commande : sh install.sh afin de charger le projet dans son intégralité.


CHOIX DES TECHNOS ET ORGANISATION

Le langage utilisé est PHP 7 par le biais du framework Laravel qui permet l'utilisation du moteur de template Blade (pour simplifier l'écriture du code html dans les vues)
ainsi que l'ORM Eloquent qui permet de s'abstraire du langage mysql.

Afin de simplifier l'utilisation des CSS et pour faciliter le responsive, c'est la bibliothèque Bootstrap qui est mise à contribution.
Les fichiers master et admin dans le dossier layout des views possèdent un lien vers le CDN de Bootstrap.

Enfin, l'utilisation de Gulp (en global et en local pour ce projet) a permis l'automatisation de la minification des fichiers de style.
Les fichiers minifiés sont directement liés aux page par le biais des vues layout (qui sont ensuite insluses dans chaque page).

SCHEMAS DES DONNEES  (diagramme UML png ~ 2 minutes)

SECURITÉ MISE EN PLACE

Les champs du formulaire (email, date, nom...) sont obligatoire et le type email ou date ultérieure à aujourd'hui sont éxigés.
L'éventuelle injection de script (javascript) lors de la reception de données provenant du formulaire est empêchée
par l'utilisation des {{}} du moteur de template blade lors de l'affichage mais également par la mise en place de c srf-token.

Les mots de passe de la base de donnée sont stockés après cryptage grâce à la façade Hash:: de Laravel.

CONTROLLERS ET VUES

Les controllers AperoAdminController et AperoFrontController sont chargés des CRUD respectifs du Front et du Back.
Ce sont des controllers de resource.

Le search Controller assure exclusivement la requête find qui doit permettre au moteur de recherche de trouver les articles en fcontion des mots clés ou tags obtenus par le formulaire.

Le publichController permet la modification des status publié ou dépublié de l'admin.

Enfin, le Login Controller est chargé d'afficher le formulaire et de traiter les données d'identification de l'ADMIN.

Pour accéder à la partie Admin:
Identifiant:  admin
Mot de passe : admin

Les vues sont organisées dans le dossier ressources et regroupées sous les dossiers layout, admin ou front.
Elles comportent le code html (ici blade) servant à l'affichage destiné au client.



L'accès aux données de la base sont effectives et la sécurité minimale est mise en place.
Pour l'instant chaque visiteur peut proposer un apero qui sera puublié sous réserve d'acceptation et de publication de la part d'un admin.
Par la suite, il serait bien sût utile d'imposer une inscription préalable aux utilisateurs qui souhaiteraient pster un nouvel apero.
Cela permettrait de garder une trace de chaque utilisateur et de pouvoir mener des actions de fidélisation par exemple.
Il faudra pour cela utiliser le troisième rôle de la table users qui est prévu à cet effet pour les besoins du futur.


Ci-joint, le diagramme UML de ce projet afin de mieux comprendre les tables utilisées et les relations qui les lient.






















