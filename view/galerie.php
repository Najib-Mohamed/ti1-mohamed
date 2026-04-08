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
            <div class="galerie-container">
                <div class="img-container">
                    <img src="./img/480px_Alfama-CCBY.jpg" alt="Alfama-CCBY">
                    <img src="./img/480px_BAIRRO_ALTO.jpg" alt="BAIRRO_ALTO">
                </div>
                <div class="img-container">
                    <img src="./img/480px_le_tram.jpg" alt="le_tram">
                    <img src="./img/480px_Lisbon_Bridge.jpg" alt="Lisbon_Bridge">
                </div>
                <div class="img-container">
                    <img src="./img/480px_Miradouro_de_São_Pedro_de_Alcântara.jpg" alt="Miradouro_de_São_Pedro_de_Alcântara">
                    <img src="./img/480px_Praça_Luís_de_Camões_2006_Luca_Galuzzi.jpg" alt="Praça_Luís_de_Camões">
                </div>
            </div>
        </main>
    </div>
</body>

</html>