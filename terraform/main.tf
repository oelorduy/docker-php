#terraform {
#  required_providers {
#    docker = {
#      source  = "kreuzwerker/docker"
#      version = ">= 2.0.0"
#    }
#  }
#}

provider "kubernetes" {
  config_path = "~/.kube/config"  # Asegúrate de que esté apuntando al archivo kubeconfig correcto
}

resource "kubernetes_deployment" "my-php-app" { 

  metadata { 

    name = "my-php-app" 

    labels = { 

      app = "my-php-app" 

    } 

  } 

  spec { 

    replicas = 3 

    selector { 

      match_labels = { 

        app = "my-php-app" 

      } 

    } 

    template { 

      metadata { 

        labels = { 

          app = "my-php-app" 

        } 

      } 

      spec { 

        container { 

          image = "oelorduy/my-php-app:v1" 

          name  = "my-php-app" 

          port { 

            container_port = 3000 

          } 

        } 

      } 

    } 

  } 

} 
