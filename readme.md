# Symfony

[Symfony Doc](https://symfony.com/doc/current/index.html)

Entrer dans notre container php : `symfony exec -it symfony-php bash`

Lister toutes les routes de votre application symfony : `symfony console debug:router`

Installation du **maker-bundle** : `composer require symfony/maker-bundle`

Création d'un **controller** avec **maker-bundle** : `symfony console make:controller` ou `composer bin/console make:controller`

[Twig Docs](https://twig.symfony.com/)

## Symfony server

- Démarrer le server symfony : `symfony server:start`
- Démarrer le server symfony en tache de fond : `symfony server:start -d`
- Arreter le server symfony : `symfony server:stop`
- Lister les servers symfony lancés : `symfony server:list`

## Symfony doctrine

Copier le fichier `.env` en `.env.local` , le personnaliser

`symfony console database:doctrine:create`