<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/lightbox.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $_GET['p'] ?></title>
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
        <button class="rementer"><a href="#haut-de-page">↑</a></button>

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
            <div class="galerie-container">
                <div class="img-container">
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_Praça_Luís_de_Camões_2006_Luca_Galuzzi.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_Praça_Luís_de_Camões_2006_Luca_Galuzzi.jpg" alt="Praça_Luís_de_Camões">
                        </a>
                        <span class="text-general">Praça_Luís_de_Camões</span>
                    </div>
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_BAIRRO_ALTO.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_BAIRRO_ALTO.jpg" alt="BAIRRO_ALTO">
                        </a>
                        <span class="text-general">BAIRRO_ALTO</span>
                    </div>
                </div>


                <div class="img-container">
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_le_tram.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_le_tram.jpg" alt="le_tram">
                        </a>
                        <span class="text-general">le_tram</span>
                    </div>
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_Lisbon_Bridge.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_Lisbon_Bridge.jpg" alt="Lisbon_Bridge">
                        </a>
                        <span class="text-general">Lisbon_Bridge</span>
                    </div>
                </div>


                <div class="img-container">
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_Alfama-CCBY.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_Alfama-CCBY.jpg" alt="Alfama-CCBY">
                        </a>
                        <span class="text-general">Alfama-CCBY</span>
                    </div>
                    <div class="img-content">
                        <a style="width:100%; height:100%;" href="./img/1280px_Miradouro_de_São_Pedro_de_Alcântara.jpg" data-lightbox="galerie-set" data-title="image1">
                            <img src="./img/480px_Miradouro_de_São_Pedro_de_Alcântara.jpg" alt="Miradouro_de_São_Pedro_de_Alcântara">
                        </a>
                        <span class="text-general">Miradouro_de_São_Pedro_de_Alcântara</span>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script src="./js/script.js"></script>
    <script src="./dist/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>