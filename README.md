DrupalCamp + SymfonyDay 2014
============================

Sistema de Plantillas de Symfony TWIG
-------------------------------------

### Miguel Angel Magaña Lemus


* Aplicación de demostración de uso del sistema de Plantillas [TWIG][2] de [Symfony][1].

* Integración con Framework de estilos CSS [Twitter Bootstrap][3].

* Sistema de Grid de 12 columnas [960.gs][4]

* Responsive


Requisitos:
----------

* Apache2

* PHP5

* GIT


Instalación
-----------

* Clonar el proyecto dentro del raíz de web: git clone https://github.com/miguel-mx/DrupalCampMx-Twig.git

* Instalar composer: https://getcomposer.org/download/ (instalar antes curl si es necesario)

    *$ apt-get install curl*

    *$ curl -sS https://getcomposer.org/installer | php*

* Instalar los componentes de Symfony utilizando composer dentro del directorio principal DrupalCampMx-Twig/

    *$ composer.phar update*

* Durante la instalación los siguientes campos se pueden dejar vacíos:

Creating the "app/config/parameters.yml" file
    - Some parameters are missing. Please provide them.
    - database_driver (pdo_mysql):
    - database_host (127.0.0.1):
    - database_port (null):
    - database_name (drupalcamp):
    - database_user (root):
    - database_password (null):
    - mailer_transport (smtp):
    - mailer_host (127.0.0.1):
    - mailer_user (null):
    - mailer_password (null):
    - locale (en):
    - secret (ThisTokenIsNotSoSecretChangeIt):

* Cambiar el propietario de todo el directorio a usuario y grupo de apache.

    (ubuntu) $ chown -R www-data:www-data DrupalCampMx

* Principales archivos del demo:

    *DrupalCampMx-Twig/src/Ccm/TwigDemoBundle*

* Importante: cambiar permisos a los directorios dentro de *app/cache*

* Página de inicio: estos son los dos controladores principales ambiente de producción y desarrollo.

    *DrupalCampMx/web/app.php/*   y  *DrupalCampMx/web/app_dev.php/*


Referencias
-----------

* [http://symfony.com/](http://symfony.com/)
* [http://twig.sensiolabs.org/](http://twig.sensiolabs.org/)
* [http://getbootstrap.com/](http://getbootstrap.com/)
* [http://960.gs/](http://960.gs/)
* [http://git-scm.com/](http://git-scm.com/)

[1]:  http://symfony.com/
[2]:  http://twig.sensiolabs.org/
[3]:  http://getbootstrap.com/
[4]:  http://960.gs/

[Miguel A. Magaña](miguel@matmor.unam.mx)