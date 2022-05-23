https://florobart.github.io/docker-sae203/

<div align="center">
    <h1><strong><strong><bold> Compte rendu SAE 2.03 </bold></strong></strong></h1>
    <br />
    <h1><strong> Sommaire : </strong></h1>
    <br>
    <h2> 1-Présentation projet     </h2>
    <h2> 2-Technologie utiliser    </h2>
    <h2> 3-Les problèmes rencontré </h2>
    <h2> 4-Utilisation du projet   </h2>
</div>

<br /><br />

# 1-Présentation du projet
Notre projet est la distribution d'un forum de discution libre, c'est à dire sans sujet de discution prédéfinie. Un forum de discution.
Le forum on peut créer des topics, les rejoindres, discutter, répondre à une réponse ou même à la question initiale.

# 2-Technologie utiliser
## &nbsp;&nbsp;&nbsp;&nbsp; 2.1-PHP
Pour notre forum nous avons fait un site dynamique pour pouvoir générer les topic au fur et à mesure de leur création par les utilisateurs. Pour faire le dynamisme du site web nous avons donc utiliser le langage PHP Pour plusieur raison. La première c'est parce qu'il y a un principe de compte ou il faut ce connecter pour écrire sur le site et les conenctions à des comptes ce fais coté serveur, l'utilisation de PHP qui s'execute coté serveur nous à donc semblé être le meilleur choix. 
<br /><br />
La deuxième est une raison de sécurité parce qu'il faut sécuriser les compte utilisateur et notament les mots de passe, avec le PHP cela est relativement facile à faire alors qu'avec l'alternative qui aurais été d'utilisé java-script cela n'aurais pas été possible. De plus le java-script s'éxecute sur la machine de chaque utilisateur, se qui est gourment en ressource pour eux et donc obligerai à avoir une assez bonne puissance de calcule alors qu'avec le PHP le code s'execute sur le serveur, se qui fais que n'importe qui avec une machine capable de faire tourner un navigateur peut aller sur notre forum.


## &nbsp;&nbsp;&nbsp;&nbsp; 2.2-Docker
Comme nous avons utiliser du PHP il nous fallais forcément un serveur pour pouvoir tester notre code et il faudra aussi un serveur pour distribuer le forum. Nous avons donc fais le choix d'utiliser docker parce que c'est simple d'utilisation, nous avons simplement à créée une image puis un container contenant notre code et l'image puis c'est tout, si ont veut changer de serveur ont à simplement à déplacé le container. C'est donc très simple d'utilisation et de maintenance.
<br /><br />
L'image est ... ***Expliquer ce qu'est l'image***


# 3-Problème rencontré

## &nbsp;&nbsp;&nbsp;&nbsp; Git for windows

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Problème
Quand on créée un fichier sous linux et qu'on fait la commande "*git clone*" depuis windows, les séquences de fin de lignes de linux sont convertis pour windows par github, passant de "\n" pour linux à "\r\n" pour windows.

Ce la ne pose pas de problème pour la majorité des fichiers, sauf pour les scripts bash. En effet, bash n'arrive pas à lire les "\r". Le problème c'est que notre container sur lequel tourne le serveur utilise une base linux, ce qui fais qu'il n'arrive pas à lire correctement le fichier bash qui sert à lancer le serveur.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solution
La solution est donc de désactivé la conversion automatique des fichiers linux en fichier windows, ce que nous avons fais grâce à la commande

    git config --global core.autocrlf false

Le boolean à la fin de la commande définie le status de la configuration, true pour activé et false pour désactivé.

## &nbsp;&nbsp;&nbsp;&nbsp; Le code html dans les topic.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Problème

Lorsqu'un utilisateur écrit un topic, si on ne traite pas le texte qu'il saisie, il est possible qu'il insère du code HTML dans le topic et qu'il s'affiche dans la page. C'est dangereux car il pourrait re-dirigé les utilisateur sur des pages malvéillantes.

### &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Solution

Nous avons résolu ce problème grace à la fonction php :

    htmlspecialchars($string)

qui permet de désactiver les balises html.


# 4-Utilisation du projet

## &nbsp;&nbsp;&nbsp;&nbsp; 4.1-Comment s'inscrire
Pour s'inscrire, il faut clicker sur bouton "*inscription*" en haut à droite de la page principale, puis il faut choisir un identifiant et un mots de passe.
Suite à sa appuyez sur le button "*s'inscrire*". Si votre pseudo et votre mot de passe est valide votre inscription sera validé et vous serrez rediriger vers la page d'acceuil, sinon votre inscription sera refuser il message de refus s'affiche et l'utilisateur est invité à recommencer.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.2-Comment ce connecter
Il n'y a pas de méthode de connexion dés l'arrivé sur le forum, cependant lors de la création d'un topic ou d'une réponse à un topic, votre nom d'utilisateur et votre mot de passe vous serons demander.
Par manque de temps nous n'avons pas fait en sorte que l'utilisateur reste connecter sur le site mais nous avions à deux façon de la faire.
<br /> <br />
La première façon et de mettre le compte de l'utilisateur dans les cookies, le problème c'est que cette solution n'est pas du tout sécurisé, nous aurions donc opté pour le deuxième solution qui est un système de token qui permet ***expliquer brièvement le principe des tokens***. Si nous avions eu le temps nous aurions donc réaliser cette solution qui est la plus sécurisé.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.3-Comment créer un topic
Pour créer un topic, voici les étapes :

- Cliquer sur le button, créer un topic <br />
- Mettre un sujet au topic             <br />
- Mettre vos identifiant               <br />

Félication vous avez créer un topic.

## &nbsp;&nbsp;&nbsp;&nbsp; 4.4-Comment répondre à un topic
Pour répondre à un topic, voici les étapes :

- Cliquer sur le topic en question <br />
- Cliquer sur répondre             <br />
- Ecrivez votre réponse           <br />
- Mettez vos identifiant          <br />

Félication vous avez répondu à un topic.

