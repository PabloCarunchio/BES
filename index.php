<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "show_pub":
                $modulo = "publicacion";
                break;

            case "pubs":
                $modulo = "publicaciones";
                break;

            case "contratacion":
                $modulo = "contratacion";
                break;

            case "ventas":
                $modulo = "ventas";
                break;

                case "contrataciones":
                $modulo = "contrataciones";
                break;

            case "logout":
                $modulo = "logout";
                break;

            case "login":
                $modulo = "login";
                break;

            case "fav":
                $modulo = "favoritos";
                break;

                case "registrar":
                $modulo = "registrar";
                break;
                    
                case "nos":
                $modulo = "nosotros";
                break;
                case "perfil":
                $modulo = "perfil";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include('vistas/' . $modulo . '/index.php'); 

?>