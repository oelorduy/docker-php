      
        
# docker-php
## Actividad Evaluativa 2

Realice los siguientes pasos para descargar la imagen de la aplicación `docker-php` del repositorio [https://github.com/oelorduy/docker-php.git](https://github.com/oelorduy/docker-php.git) y correrla en Docker Desktop.

## Requisitos de Instalación:
- Docker Desktop.
- Kubernetes.
- Minikube.
- Terraform.
- Git.

## Paso 1: Descargar imagen.
```bash
git clone https://github.com/oelorduy/docker-php.git
```

## Paso 2: Cargar Imagen en Docker Desktop y Ejecutarla.
```bash
docker build -t my-php-app .
docker run -p 3000:80 -d -v C:\docker-php/src:/var/www/html/ my-php-app
```

## Paso 3: Crear repositorio en DockerHub y subir imagen. (Debe tener cuenta registrada en DockerHub)
```bash
docker login
```

El nombre del repositorio en DockerHub debe cumplir con el estándar `usuariodockerhub/nombrerepositorio:etiqueta`.
```bash
docker tag my-php-app TuUsuario/my-php-app:v1
docker push TuUsuario/my-php-app:v1
```

## Paso 4: Iniciar Minikube
```bash
minikube start
```

## Paso 5: Realizar despliegue del servicio
Sobre el directorio donde descargó el directorio `kubernetes`:
```bash
kubectl apply -f deployment.yaml
kubectl apply -f service.yaml
```

### Nota:
Si desea desplegar el servicio de manera automatizada con Terraform, sobre el directorio donde descargó el directorio `terraform`:
```bash
terraform init
terraform apply
```
```

