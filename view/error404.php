<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Erreur 404</title>
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
            <?php
            // chemin absolu
            include ROOT_PATH . "/view/inc/menu-gsm.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";
            ?>
            <div class="text-conteneur">
                <div class="erreur">
                    <h1>Erreur 404</h1>
                    <img src="./img/404.jpg" alt="">
                    <p>cette page n'existe pas</p>
                    <p>pour revenir a l'accueil clicker ici => <a href="./">accueil</a></p>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>