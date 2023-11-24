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

la page d'accueil ;
la page listant l’ensemble des blog posts ;
la page affichant un blog post ;
la page permettant d’ajouter un blog post ;
la page permettant de modifier un blog post ;
les pages permettant de modifier/supprimer un blog post ;
les pages de connexion/enregistrement des utilisateurs.
Vous développerez une partie administration qui devra être accessible uniquement aux utilisateurs inscrits et validés.

Les pages d’administration seront donc accessibles sur conditions et vous veillerez à la sécurité de la partie administration.

Commençons par les pages utiles à tous les internautes.

Sur la page d’accueil, il faudra présenter les informations suivantes :

votre nom et votre prénom ;
une photo et/ou un logo ;
une phrase d’accroche qui vous ressemble (exemple : “Martin Durand, le développeur qu’il vous faut !”) ;
un menu permettant de naviguer parmi l’ensemble des pages de votre site web ;
un formulaire de contact (à la soumission de ce formulaire, un e-mail avec toutes ces informations vous sera envoyé) avec les champs suivants :
nom/prénom,
e-mail de contact,
message,
un lien vers votre CV au format PDF ;
et l’ensemble des liens vers les réseaux sociaux où l’on peut vous suivre (GitHub, LinkedIn, Twitter…).
Sur la page listant tous les blogs posts (du plus récent au plus ancien), il faut afficher les informations suivantes pour chaque blog post :

le titre ;
la date de dernière modification ;
le chapô ;
et un lien vers le blog post.
Sur la page présentant le détail d’un blog post, il faut afficher les informations suivantes :

le titre ;
le chapô ;
le contenu ;
l’auteur ;
la date de dernière mise à jour ;
le formulaire permettant d’ajouter un commentaire (soumis pour validation) ;
les listes des commentaires validés et publiés.
Sur la page permettant de modifier un blog post, l’utilisateur a la possibilité de modifier les champs titre, chapô, auteur et contenu.

Dans le footer menu, il doit figurer un lien pour accéder à l’administration du blog.