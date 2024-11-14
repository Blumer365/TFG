# Introducción 
Este proyecto final de grado tiene como objetivo diseñar y desplegar una aplicación web completamente funcional, junto con la infraestructura necesaria en Azure. Se han implementado pipelines de CI/CD para automatizar el desarrollo y despliegue, mejorando la eficiencia y reduciendo errores.

# Estructura del Proyecto
El proyecto está dividido en dos partes principales:
1.	**Repo-app**
    - Contiene el código fuente de la aplicación web.
    - Define el pipeline de CI/CD para la aplicación ('azure-pipeline-app.yml').
2.	**Repo-infra**
    - Incluye los scripts de infraestructura como código para Azure.
    - Define el pipeline de CI/CD para la infraestructura ('azure-pipeline-infra.yaml').

# Guía de Inicio Rápido
## Requisitos Previos
1. Cuenta de Azure y suscripción activa.
2. Configuración de Azure DevOps con permisos para crear pipelines.
3. Instalación local de:
   - **Node.js** (o el entorno necesario para la aplicación).
   - **Terraform/CLI de Azure** (para trabajar con la infraestructura).
## Pasos:
1. Clonar ambos repositorios:
   ```bash
   git clone <URL_REPO_APP>
   git clone <URL_REPO_INFRA>
   Configurar variables en los archivos de pipeline (azure-pipeline-app.yml y azure-pipeline-infra.yaml).
2. Crear pipelines en Azure DevOps y vincular los repositorios.
3. Ejecutar los pipelines para desplegar la infraestructura y la aplicación.

# Contribución
A día de hoy necesitaría una cuenta de Azure para poder hacer funcionar el proyecto y poder ver online la webapp. Tenía una cuenta gratuíta para exponerlo al jurado en su momento pero ya acabó.
¿Igual existe una posible opción paralela para hacerlo funcionar?
