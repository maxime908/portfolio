# Portfolio

Bienvenue dans mon portfolio ! Ce projet est une application web construite en PHP où je présente mes compétences, mon parcours et mes projets réalisés. Il utilise **XAMPP** pour l'environnement local, avec **Apache** pour le serveur et **MySQL** pour la gestion de données (obligatoire pour le bon fonctionnement).

## Fonctionnalités

- **Page d'accueil** : Introduction et aperçu de mes projets.
- **Projets** : Liste de mes projets avec des descriptions et des liens.
- **À propos** : Informations sur mon parcours, mes compétences et ma vision du développement web.
- **Contact** : Formulaire pour m'envoyer un message (requiert MySQL pour enregistrer les messages).

## Prérequis

Avant de commencer, assurez-vous d'avoir installé et configuré les éléments suivants :

- **XAMPP** (Apache et MySQL) : Permet de lancer un serveur local PHP et une base de données MySQL. **MySQL est obligatoire** pour stocker les données (comme les messages du formulaire de contact et autres informations dynamiques).
- **PHP** (version 7.4 ou supérieure, incluse dans XAMPP)
- **MySQL** : Pour la gestion des données liées au formulaire de contact ou autres parties dynamiques du site.

## Installation en local avec XAMPP

### Étapes :

1. **Téléchargez et installez XAMPP** :

   Si vous ne l'avez pas encore fait, téléchargez **XAMPP** depuis le site officiel : [https://www.apachefriends.org/fr/index.html](https://www.apachefriends.org/fr/index.html). Suivez les instructions d'installation pour votre système d'exploitation.

2. **Clonez ou téléchargez ce repository** :

   Si vous ne l'avez pas déjà fait, clonez ou téléchargez le projet depuis GitHub (si applicable) ou ajoutez-le directement dans le dossier `htdocs` de XAMPP :

   - Le chemin par défaut pour XAMPP est `C:\xampp\htdocs\`.
   - Déplacez le dossier de votre projet dans `htdocs`.

3. **Lancez XAMPP** :

   - Ouvrez le panneau de contrôle XAMPP.
   - Démarrez **Apache** et **MySQL** (c'est important pour que la base de données fonctionne).

4. **Configuration de la base de données MySQL** (MySQL est obligatoire) :

    - Lancez **phpMyAdmin** en ouvrant votre navigateur et en allant à `http://localhost/phpmyadmin/`.
    - Créez une base de données qui va s'appeler `portfolio`.
    - Allez dans l'onglet **Importer**.
    - Cliquez sur **Choisir un fichier**, puis sélectionnez le fichier SQL `portfolio.sql` dans le dossier du projet (dans le sous-dossier `SQL`).
    - Importez la base de données.

5. **Lancer le portfolio** :

    Ouvrez votre navigateur et tapez l'URL suivante pour voir votre portfolio en local :

    ```
    http://localhost/nom-du-dossier-du-portfolio
    ```

    Remplacez `nom-du-dossier-du-portfolio` par le nom du dossier où vous avez placé le projet dans `htdocs`.

6. **Voilà vous avez terminé la configuration de mon portfolio** :smile: