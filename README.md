https://florobart.github.io/docker-sae203/
# docker-sae203

Comment installer le forum ?

1. Construire l'image via le Dockerfile
Exécuter la commande suivante

    docker build -t <nom image> .

2. Créer un conteneur docker avec l'image créée plus tôt

    docker run --name <nom conteneur> -d -p <port>:80 <nom image>
