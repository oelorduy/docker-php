# docker-php
Actividad Evaluativa 2
#Realice los siguientes pasos para descargar imagen de la aplicación docker-php del 
#repositorio https://github.com/oelorduy/docker-php.git  y correrla en Docker Desktop

#Requisitos de Instalación:
#--Docker desktop.
#--Kubernetes.
#--Minikube.
#--Terraform.
#--Git.


#Paso 1: Descargar imagen.
        git clone https://github.com/oelorduy/docker-php.git  

#Paso 2: Cargar Imagen en Docker Desktop y Ejecutarla.
        docker build -t my-php-app .
        docker run -p 3000:80 -d -v C:\docker-php/src:/var/www/html/ my-php-app
#Paso 3: Crear repositorio en Dockerhub y Subir imagen.(debe tener cuenta registrada en dockerhub)
        docker login
        #El nombre del repositorio en DockerHub debe cumplir con el estandar usuariodockerhub/nombrerepositorio:etiqueta
        docker tag my-php-app TuUsuario/my-php-app:v1
        docker push TuUsuario/my-php-app:v1
#Paso 4: Iniciar Minikube
        minikube start
#Paso 5: Realizar despliegue del servicio
        #sobre le directorio donde descargo el directorio kubernetes
        kubectl apply -f deployment.yaml
        kubectl apply -f service.yaml
Nota: si desea desplegar servicio de manera automatizada con terraform
        #sobre le directorio donde descargo el directorio terraform
        terraform init
        terraform apply

        
        