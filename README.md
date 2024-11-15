# Gestion de contacts en PHP

## Description
Ce projet est une application web développée en PHP pour gérer des contacts via une interface simple et intuitive. Il permet d'effectuer des opérations CRUD (Create, Read, Update, Delete) sur une base de données MySQL.

## Fonctionnalités
- **Ajouter un contact** : Formulaire pour saisir le nom, l'email et le numéro de téléphone.
- **Afficher tous les contacts** : Liste complète des contacts avec options pour les modifier ou les supprimer.
- **Modifier un contact** : Formulaire pré-rempli pour mettre à jour les informations d'un contact.
- **Supprimer un contact** : Suppression rapide d'un contact avec confirmation.
- **Rechercher un contact** : Récupération des informations d'un contact via son ID.

## Technologies utilisées
- **Langage backend** : PHP
- **Frontend** : HTML5, CSS3
- **Base de données** : MySQL
- **Extensions PHP** : PDO pour une interaction sécurisée avec la base de données
- **Serveur** : Apache (XAMPP recommandé)

## Structure des fichiers
- `index.php` : Affiche la liste des contacts avec options pour modifier ou supprimer.
- `add_contact.php` : Ajoute un nouveau contact.
- `update_contact.php` : Met à jour les informations d'un contact existant.
- `delete_contact.php` : Supprime un contact via son ID.
- `edit.php` : Affiche un formulaire pré-rempli pour modifier un contact.
- `get_contact.php` : Récupère les informations d'un contact par ID (dépendance pour `edit.php`).
- `data.php` : Contient toutes les fonctions de manipulation des données.
- `db.php` : Gère la connexion à la base de données.

## Installation
1. Clonez le dépôt :
   ```bash
   git clone <url-du-repo>
   ```
2. Importez le fichier SQL dans votre base de données MySQL.
3. Configurez les identifiants de votre base de données dans `db.php`.
4. Lancez le serveur local avec XAMPP ou un équivalent.
5. Accédez à l'application via `http://localhost/<nom-du-projet>`.

## Auteur
Clément Moreau

