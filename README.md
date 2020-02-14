# Ynov Partiel

1. Qu'est-ce qu'un container de services ? Quel est son rôle ?
    - Un Container de Service permet la centralisation des Services ainsi que la facon dont les objets sont construit.
    Cela permet une architecture forte et rapide.

2. Quelle est la différence entre les commandes `make:entity` et `make:user` lorsqu'on utilise la console Symfony ?

3. Quelle commande utiliser pour charger les fixtures dans la base de données ?
    1. `php bin/console make:migration`
    2. `php bin/console doctrine:migrations:migrate`
    3. `php bin/console doctrine:fixtures:load`
4. Résumez de manière simple le fonctionnement du système de versions "Semver"
    - Semver (Semantic Versionning) est un systeme de notation des versions: `majeur.mineur.patch.`
5. Qu'est-ce qu'un `Repository` ? A quoi sert-il ?
    - Un repository est un fichier qui sert a faire le lien entre la base de donnees et les controllers.
6. Quelle commande utiliser pour voir la liste des routes ?
    - `php bin/console debug:router`
7. Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur courant, etc...?
    - `app.request.query.get('param') == 'value'`
8. Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avons abordées en cours ?
    - les migrations : `php bin/console make:migration && php bin/console doctrine:migrations:migrate`
    - et l'autre : `php bin/console doctrine:schema:update --force`
9. Quelle commande permet de créer une classe de contrôleur ?
    - `php bin/console make:controller`
10. Décrivez succintement l'outil Flex de Symfony
    - Ce sont les packets (une liste) pouvant etre ajouter a un projet symfony avec le gestionnaire Composer.
