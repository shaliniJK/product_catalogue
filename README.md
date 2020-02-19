# Catalogue App

## Rendu IFI PHP

**Sarah BEN ABDESSLEM**
**Jayjaywantee KOODUN**

Master 2 e-Services 2019/2020

---

## Description

Ceci est un projet simple pour lister les articles d'un catalogue de produit depuis un fichier yaml. Il est possible d'afficher les détails d'un produit.

---

## Configuration de l'environnement de développement

Ce projet nécéssite `PHP >=7.2.0` et utilise le framework [Laravel](<(https://laravel.com/docs)>). Laravel utilise [Composer](https://getcomposer.org/) pour la gestion des dépendances. Les données sont stockées dans une base `MySQL`.

Avant de lancer ce projet, il faut avoir installé sur votre machine :

-   PHP 7.3,
-   Composer,
-   MySQL

Après avoir cloné ce projet, assurez-vous d'avoir la dernière version de Composer et téléchargez les dépendances PHP du projet avec les commandes suivantes :

```bash
composer install
```

Créer une copie du fichier `.env` à la racine du projet :

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

Vous pouvez maintenant lancer un serveur de développement sur l'adresse _http://localhost:8000_ avec la commande :

```bash
php artisan serve
```
