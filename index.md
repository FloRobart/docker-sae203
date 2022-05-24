<div align="center">
    <h1><strong> Compte rendu SAE 2.03 </strong></h1>
    <br /><br />
    <h1> Sommaire : </h1>
    <br />
    <h2> 1-Présentation du projet   </h2>
    <h2> 2-Technologie utilisées    </h2>
    <h2> 3-Les problèmes rencontrés </h2>
    <h2> 4-Utilisation du projet    </h2>
</div>

<br /><br />

# 1-Présentation du projet
Notre projet consiste a pouvoir mettre en place un forum de discussion facilement grâce à Docker. Il permet aux utilisateurs de créer leur compte et de poster des sujets de discussion et pouvoir répondre à ceux des autres. Le forum mis à disposition est un forum générique, facilement modifiable par qui le souhaite.

# 2-Technologie utilisées
## &nbsp;&nbsp;&nbsp;&nbsp; 2.1-PHP
Qui dit forum dit site dynamique. Deux choix s'offraient donc à nous : Javascript (JS) pur ou PHP ? Pour répondre à cette question, nous avons regardé de quoi le forum avait besoin pour fonctionner. Nous avons besoin d'une base de données stockant les comptes des utilisateurs, ainsi que les messages postés. Le JS pur coté client ne permet pas de communiquer avec une base de données. Et même si c'était possible, le JS est exécuté dans le navigateur, et est donc modifiable directement dans celui-ci. Les plus malins auraient donc pu jouer avec notre base de données comme si de rien n'était. 
<br /><br />
Le PHP, en plus d'avoir une syntaxe assez simple, peut être mélangé à des pages HTML, contrairement à Javascript qui doit utiliser des méthodes particulières pour récupérer et modifier des éléments de la page html. PHP possède également des fonctions pour chiffrer les mots de passe, ce qui est bien utile puisqu'au lieu de stocker le mot de passe en dur dans la base de données, on stocke le mot de passe "hashé". PHP est assez simple d'utilisation mais reste très puissant.


## &nbsp;&nbsp;&nbsp;&nbsp; 2.2-Docker
PHP est très utile, mais il faut un serveur dédié pour l'exécuter. C'est là que Docker entre en scène. Docker est un logiciel de virtualisation ayant pour particularité de faire des "machines virtuelles", appelées conteneurs, très légères basées sur des "images". Une image est une configuration particulière que l'on peut appliquer à un conteneur Docker. On peut très facilement créer des serveurs grâce aux conteneurs en exposant les ports adéquats, et adapter leur fonctionnement à notre besoin via le dockerfile.
<br /><br />
Notre Dockerfile part d'une base Debian et installe les paquets nécessaires à notre forum : Serveur apache, MariaDB (Une implémentation MySQL Open Source), PHP, PHP-mysql. Elle expose ensuite les ports requis pour se connecter au serveur, puis exécute le script bash de configuration.



# 3-Problèmes rencontrés

## &nbsp;&nbsp;&nbsp;&nbsp; Git for windows

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Problème
Lorsque l'on créé un fichier sous linux et que l'on exécute la commande "*git clone*" depuis windows, les séquences de fin de ligne de linux sont converties pour windows par git, passant de "\n" pour linux à "\r\n" pour windows.

Cela ne pose pas de problème pour la majorité des fichiers, sauf pour les scripts bash. En effet, bash n'arrive pas à lire les "\r". Le problème c'est que notre container sur lequel tourne le serveur utilise une script bash pour se configurer. Ce problème empêche donc notre conteneur Docker de tout simplement démarrer.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solution
La solution est donc de désactiver la conversion automatique des "\n", ce que nous avons fait grâce à la commande

    git config --global core.autocrlf false

Le booléen à la fin de la commande définit le statut de la configuration, true pour activé et false pour désactivé.

## &nbsp;&nbsp;&nbsp;&nbsp; Le code html dans les topics.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Problème

Lorsqu'un utilisateur écrit un topic, si on ne traite pas le texte qu'il saisit, il est possible qu'il insère du code HTML dans le topic et qu'il s'affiche dans la page. C'est dangereux car il pourrait rediriger les utilisateurs sur des pages malveillantes.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solution

Nous avons résolu ce problème grâce à la fonction php :

    htmlspecialchars($string)

qui remplace les caractères des balises html par des équivalents.


# 4-Utilisation du projet

## &nbsp;&nbsp;&nbsp;&nbsp; 4.1-Comment s'inscrire
Pour s'inscrire, il suffit de cliquer sur le bouton "*s'inscrire*" en haut à droite de la page principale, puis de remplir les informations de son choix. Si votre pseudonyme n'a pas déjà été choisi par quelqu'un d'autre, une page confirmant votre inscription s'affichera et vous serez redirigés vers l'accueil.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.2-Comment se connecter
Il n'y a pas de méthode de connexion dès l'arrivée sur le forum, cependant lors de la création d'un topic ou d'une réponse à un topic, votre nom d'utilisateur et votre mot de passe vous seront demandés.
Par manque de temps, nous n'avons pas fait en sorte que l'utilisateur reste connecté sur le site mais nous avions à deux façon de la faire.
<br /> <br />
La première façon est de mettre le compte de l'utilisateur dans les cookies, le problème c'est que cette solution n'est pas du tout sécurisée, nous aurions donc pu opter pour la deuxième solution qui est un système de token qui permet de stocker une clé temporaire dans les cookies, valable uniquement pendant une période très limitée. Malheureusement, nous avons appris toutes les notions de PHP utilisées dans le forum durant la SAÉ, et le temps qui nous restait ne nous a pas permi d'approfondir cette notion.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.3-Comment créer un topic
Pour créer un topic, voici les étapes :

- Cliquer sur "Nouveau Topic"          <br />
- Rédiger le topic                     <br />
- Remplir ses identifiants             <br />
- Cliquer sur "Poster le topic"        <br />

Félication vous avez créé un topic.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.4-Comment répondre à un topic
Pour répondre à un topic, voici les étapes :

- Cliquer sur le topic en question  <br />
- Cliquer sur "Répondre à ce topic" <br />
- Rédiger sa réponse                <br />
- Remplir ses identifiants          <br />
- Cliquer sur "Poster la réponse"   <br />

Félication vous avez répondu à un topic existant.

