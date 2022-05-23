https://florobart.github.io/docker-sae203/
# Compte rendu SAE 2.03

# Sommaire :

## 1-Présentation projet     <br />
## 2-Technologie utiliser    <br />
## 3-Utilisation du projet   <br />
## 4-Les problèmes rencontré <br />

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
Comme nous avons utiliser du PHP il nous fallais forcément un serveur pour pouvoir tester notre code et il faudra aussi un serveur pour distribuer le forum. Nous avons fais le choix d'utiliser docker parce que c'est simple d'utilisation, nous avons simplement à créée une image puis un container contenant notre code et l'image puis c'est tout, si ont veut changer de serveur ont à simplement à déplacé le container. C'est donc très simple d'utilisation et de maintenance.
<br /><br />
L'image est ... **Expliquer ce qu'est l'image**


# 3-Les problèmes rencontré


# 4-Utilisation du projet
## &nbsp;&nbsp;&nbsp;&nbsp; 4.1-Comment s'inscrire

## &nbsp;&nbsp;&nbsp;&nbsp; 4.2-Comment ce connecter

## &nbsp;&nbsp;&nbsp;&nbsp; 4.3-Comment créer un topic

## &nbsp;&nbsp;&nbsp;&nbsp; 4.4-Comment répondre à un topic
 
