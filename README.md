# docker-sae203

Comment installer le forum ?

1. Construire l'image via le Dockerfile (commande à exécuter dans le dossier où se trouve le dit Dockerfile)

       docker build -t <nom image> .

2. Créer un conteneur docker avec l'image créée plus tôt

       docker run --name <nom conteneur> -d -p <port>:80 <nom image>
