# Ejercicios de Laravel - Ejercicio 1
## Conceptos básicos
### Como crear tu blog

#### Instalacion
1. Clonar este repositorio
2. Entrar en el directorio
3. Ejecutar `composer install`
4. Ejecutar `php artisan key:generate`
5. Ejecutar `cp .env.example .env`

#### Ejecutar
##### Servidor integrado
* Ejecutar `php artisan serve`
* Abre tu navegador y escribe la url `http://localhost:8000`

##### Homestead (Máquina virtual)
* Instala VirtualBox
* Configura el fichero `Homestead.yaml` con la IP y el nombre de la máquina
* Ejecuta `vagrant up`
* Abre el navegador y escribe la URL `http://ip_de_homestead/`