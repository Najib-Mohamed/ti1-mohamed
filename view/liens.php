<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        // chemin absolu
        include ROOT_PATH . "/view/inc/entete.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/entete.php";
        ?>
    </header>
    <div class="body-contaier">
        <?php
        // chemin absolu
        include ROOT_PATH . "/view/inc/menu.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/menu.php";
        ?>
        <main>
            <h1 class="titre">Galerie photo</h1>
            <?php
            // chemin absolu
            include ROOT_PATH . "/view/inc/menu-gsm.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";
            ?>
            <div class="conteneur-img">
                <img src="./img/liens.jpg" alt="">
            </div>
            <div class="lines-containers">
                <ul>
                    <li><a class="text-general" href="#">Berlin</a></li>
                    <li><a class="text-general" href="#">Vienne</a></li>
                    <li><a class="text-general" href="#">Paris</a></li>
                    <li><a class="text-general" href="#">Madrid</a></li>
                    <li><a class="text-general" href="#">Rome</a></li>
                    <li><a class="text-general" href="#">Londres</a></li>
                </ul>
                <ul>
                    <li><a class="text-general" href="#">Lisbonne</a></li>
                    <li><a class="text-general" href="#">Prague</a></li>
                    <li><a class="text-general" href="#">Amsterdam</a></li>
                    <li><a class="text-general" href="#">Copenhague</a></li>
                    <li><a class="text-general" href="#">Dublin</a></li>
                    <li><a class="text-general" href="#">Athène</a></li>
                </ul>
                <ul>
                    <li><a class="text-general" href="#">Sofia</a></li>
                    <li><a class="text-general" href="#">Varsovie</a></li>
                    <li><a class="text-general" href="#">Helsinki</a></li>
                    <li><a class="text-general" href="#">Stockholm</a></li>
                    <li><a class="text-general" href="#">Oslo</a></li>
                    <li><a class="text-general" href="#">Budapest</a></li>
                </ul>
            </div>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>