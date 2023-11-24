Installation : 


1 - Lancer la commande : git https://github.com/koko11600/Projet_5_OpenclassRoom.git

2 - Lancer la commande : cd Projet_5_OpenclassRoom

3 - Lancer dans le terminal composer install 

Remarques :

1 - Mettre à jour models/Model.php

Pour pouvoir connecter la base de données

2 - Mettre à jour Models/ServiceManager.php


Changer les differentes informations concernant l'envoi de mail : /models/ServiceManager.php

```text
$mail->isSMTP();
$mail->Host = Le nom d'hôte de votre serveur de messagerie (ex: smtp.gmail.com)
$mail->SMTPAuth = true ou false (Selon les informations communiqué par votre serveur de messagerie, celle-ci demandera l'authentification SMTP ou non)
$mail->Username = L'adresse mail
$mail->Password = Le mot de passe de votre adresse mail
$mail->SMTPSecure = tls ou ssl (Selon les informations communiqué par votre serveur de messagerie) 
```


Projet : 

Le projet est donc de développer votre blog professionnel. Ce site web se décompose en deux grands groupes de pages :

les pages utiles à tous les visiteurs ;
les pages permettant d’administrer votre blog.
Voici la liste des pages qui devront être accessibles depuis votre site web :

Fonctionnalités : 

- En tant que visiteur, je peux accéder à la page d'accueil.

- En tant que visiteur, je peux utiliser le formulaire de contact.

- En tant que visiteur, je peux accéder à la liste des articles.

- En tant que visiteur, je peux accéder aux détails d'un article.

- En tant que visiteur, je peux accéder au profil d'un utilisateur.

- En tant que visiteur, je peux créer un compte.

- En tant que visiteur, je peux me connecter.

- En tant qu'utilisateur, je peux ajouter un commentaire.

- En tant qu'utilisateur, je peux accéder à mon profil.

- En tant qu'utilisateur, je peux modifier mes informations.

- En tant qu'utilisateur, je peux me déconnecter.

- En tant qu'administrateur, je peux ajouter un article.

- En tant qu'administrateur, je peux modifier un article.

- En tant qu'administrateur, je peux supprimer un article.

- En tant qu'administrateur, je peux accéder à la liste des commentaires.

- En tant qu'administrateur, je peux valider un commentaire.

- En tant qu'administrateur, je peux archiver un commentaire.

- En tant qu'administrateur, je peux supprimer un commentaire.

- En tant qu'administrateur, je peux accéder à la liste des utilisateurs.

- En tant qu'administrateur, je peux supprimer un utilisateur.