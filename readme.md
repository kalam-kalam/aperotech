
AperoTech Project


-> Protection XSS et CSRF:
Views: es {{}} blade permettent d'éviter l'injection de sript javascript.

Formulaires: {{csrf_field()}}


-> Reponsive (Twitter Bootstrap):
Nav: La page front ainsi que la page admin disposent d'un menu responsive qui se transforme en menu burguer.
Breaking point 767x650px

Grille: La page d'index front est munie d'une grille responsive de 3 colonnes.
La première colonne centrale (md 8)
La deuxième colonne (md 1) sert de marge entre les deux.
La troisième comporte un aside comportant une description de l'apperotech par exemple.

Au breaking point 67x650px, la colonne centrale reste en haut tandis que l'aside se déplace en fin de page.

-> Database et tables:
Voir le diagramme UML lié à ce projet pour comprendre en détail la structure de la base de donnée ainsi que les relations qui régissent ses tables.
Dans Ressources -> Assets

-> Dates format:
Toutes les dates affichées sur le site sont au format JJ mois AAAA.

-> Outils:
Bootstrap => styles et responsive
Javascript => menu burguer
Jquery => pop up suppression des aperos dans l'admin.
Php Storm => IDE
Blade => templating engine
Gulp => automatisation des minifications CSS et JS
Laravel => PHP Framework

-> Sécurité
Tout guest peut proposer des apéros. Lesquels doivent d'abord passer par la modération d'un admin pour être publiés ou non.

Pour accéder à la partie Admin:
Identifiant:  admin
Mot de passe : admin

Rules : fichier Form Request pour les champs obligatoires des formulaires
ex email obligatoire
date postérieure imposée.






