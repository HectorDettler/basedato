<?php
session_start();
$url= PlantillaControlador::url();

?>


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Page Title  -->
    <title>Base de datos</title>
    <!-- StyleSheets  -->
    
    <link rel="stylesheet" href="<?php  echo $url;?>vistas/assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="<?php  echo $url;?>vistas/assets/css/theme.css?ver=3.2.2">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script  src="<?php  echo $url;?>vistas/js/scripts.js"></script>
    
    
</head>


<body class="nk-body bg-lighter npc-general has-sidebar ">

    <div class="nk-app-root">
        <?php if (isset($_SESSION["session"]) && $_SESSION["session"] == "ok") { ?>


        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php include 'vistas/modulos/menu.php'?>
            <!-- sidebar @e -->
            
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- HEADER -->
                <?php include 'vistas/modulos/header.php'?>
                <!--  HEADER  -->
                <!-- content @s -->
                <div class="nk-content ">
                <?php

                    if (isset($_GET["pagina"])) // entra si es verdadero
                    {

                        $paginas = explode("/", $_GET["pagina"]);
                        //print_r($paginas);

                        if (
                            $paginas[0] == "home" ||
                            $paginas[0] == "productos" ||
                            $paginas[0] == "usuarios" ||
                            $paginas[0] == "categorias" ||
                            $paginas[0] == "salir"
                        ) {
                            include "vistas/modulos/" . $paginas[0] . ".php";
                        } else {
                            include "vistas/modulos/404.php";
                        }
                    } else {
                        include "vistas/modulos/home.php";
                    }

                    ?>

                </div>
                <!-- content @e -->
                <!-- FOOTER -->
                <?php include 'vistas/modulos/footer.php'?>
                <!-- FOOTER -->
                <?php } else {
                    include 'vistas/modulos/login.php';
                } ?>
            </div>
            <!-- wrap @e -->
        </div>
        
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
  
    <!-- JavaScript -->
    <script src="<?php  echo $url;?>vistas/assets/js/bundle.js?ver=3.2.2"></script>
    <script src="<?php  echo $url;?>vistas/assets/js/scripts.js?ver=3.2.2"></script>
    <script  src="<?php  echo $url;?>vistas/js/productos.js"></script>
    <script src="<?php  echo $url;?>vistas/assets/js/libs/datatable-btns.js?ver=3.2.2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>