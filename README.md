# CollectionSite
L'objectif est d'implémenter un outil pour la création d'un jeu de données destinée à la tache de détection automatique de message haineux en machine learning. 
L'outil devrait donc avoir deux grandes fonctionnalité. La section vote, qui permettra d'effectuer l'étiquettage et la section ajout qui permetrra d'ajouter de nouveaux messages.

## 1. Section Vote

Où on a un ensemble de message déjà collecté, l'utilisateur devra voter ou attribuer une etiquette à chaque message, tout en justifiant son choix. Pour l'instant le vote de tous les utilisateurs ont le meme poids et on utiliseras le sytème de votes majoritaire pour attribuer l'étiquette finale à un message. Le fait que l'utilisateur justifie son choix est important parce que cela pourait aider pour une tache d'explicabilité. 

## 2. Section Ajout

Elle n'est pas encore totalement implémenté, mais l'idéé est qu'elle devrait permettre à un utilisateur d'ajouter un message ou commentaire pour augmenter le jeu de données. 

## 3. Start

L'implémentation a été effectué en utilisant PHP, HTML, CSS, et JS. 

1. Cloner le projet avec la commande "git clone https://github.com/donaldonana/CollectionSite.git"
1. Installer XAMPP
2. Lancer XAMPP avec la commande "sudo /opt/lampp/lampp start"
3. Copier le projet dans le dossier htdocs de XAMPP avec la commande "cp -r CollectionSite/ /opt/lampp/htdocs/
4. Entrer l'URL "http://localhost/CollectionSite/" sur le navigateur


