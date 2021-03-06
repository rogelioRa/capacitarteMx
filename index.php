<?php
        /*--------------------------------------
            Created by Dreamsteam
                - Gerson Isaias
                - Wilvardo Ramirez
                - Rogelio Jinestas
        ---------------------------------------*/

        /*---------------------------------------
        Declaramos constantes como DS y ROOt que
        nos ayudarán a las rutas amigables
        ----------------------------------------*/

        define('DS',DIRECTORY_SEPARATOR);
        define('ROOT',realpath(dirname(__FILE__)).DS );

        /*---------------------------------------
        - Requerimos el autoload para asi poder
        - cargar las clases en tiempo de ejecucion
        ----------------------------------------*/
        require_once 'autoload.php';
        Autoloader::run();

        /*---------------------------------------
        Inicializamos el Routing para las rutas
        agradables y accedemos a las clases con
        sus namespace
        ----------------------------------------*/

        Routing::run(new Request());


        /*error_reporting(E_ALL ^ E_NOTICE);
        ini_set('display_errors', '1');

        require_once 'vendor/autoload.php';

        $loader = new Twig_Loader_Filesystem('View/');
        $twig = new Twig_Environment($loader);

        echo $twig->render('Post.php');*/


?>
