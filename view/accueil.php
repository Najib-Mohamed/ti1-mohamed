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
            <h1 class="titre-accueil">Binevenue sur notre site consacré à Lisbon.</h1>
            <div class="conteneur-img-accueil">
                <img src="./img/armoiries.png" alt="">
            </div>
            <div class="accueil-text-conteneur">
                <p class="accueil-text gras">
                    Lisbonne est la capitale et la plus grande ville du Portugal. Considérée comme une « ville mondiale » selon le classement 2010 du Réseau d’étude sur la mondialisation et les villes mondiales (GaWC) comme Taipei, Miami, Varsovie ou Munich, Lisbonne est également le chef-lieu du district de Lisbonne, du Grand Lisbonne et de la zone métropolitaine de Lisbonne. Ses habitants sont habituellement appelés Lisboètes (du portugais lisboeta), mais on rencontre aussi les termes Lisbonnin et Lisbonnais.
                </p>
                <p class="accueil-text gras">
                    D'après le recensement de 2020, la municipalité compterait une population de 837 890 habitants4, répartie sur une surface de 83,7 km2. L'agglomération de Lisbonne (Grand Lisbonne) compte une population légèrement supérieure à 2,190 millions d'habitants (NUTS III), ce qui en fait la 15e agglomération européenne en importance. Son aire urbaine (Région de Lisbonne) compte quant à elle 2 987 876 habitants (NUTS II), représentant 30,7 % de la population portugaise. C'est la ville la plus riche du Portugal, avec un PIB par habitant supérieur au PIB moyen de l'Union européenne.
                </p>
                <p class="accueil-text gras">
                    Située à l'embouchure du Tage (Tejo en portugais) la municipalité est divisée en 24 freguesias (paroisses civiles ou arrondissements). Elle est limitée par les communes de Odivelas et Loures au nord, Oeiras à l'ouest, Amadora au nord-ouest et l'estuaire du Tage (la mer de Paille) au sud-est, au travers duquel, la ville est au contact des municipalités de la rive sud : Almada, Seixal, Barreiro, Moita, Montijo et Alcochete.
                </p>
                <p class="accueil-text gras">
                    Deux agences européennes ont leur siège à Lisbonne : l'Observatoire européen des drogues et des toxicomanies et l'Agence européenne pour la sécurité maritime, toutes les deux situées au bord du fleuve. L'organisation de la Communauté des pays de langue portugaise a également ses bureaux dans la capitale portugaise.
                </p>
            </div>
            <div class="liens-accueil">
                <p>dans ce sites vous trouverez divers informations concernant :</p>
                <ul>
                    <li class="liens-accueil"><a href="./?pages=geographie">Une brève présentation de Lisbon sur son role en Portugal et dans le monde</a></li>
                    <li class="liens-accueil"><a href="./?pages=histoire">Un rappel historique, de sa fondation à aujourd'hui</a></li>
                    <li class="liens-accueil"><a href="./?pages=culture">Un tour d'horizon en matière d'art et de culture</a></li>
                    <li class="liens-accueil"><a href="./?pages=galerie">Une galerie de photographies</a></li>
                    <li class="liens-accueil"><a href="./?pages=contact">un formulaire pour nous contacter</a></li>
                    <li class="liens-accueil"><a href="./?pages=liens">Des liens vers les site partenaire</a></li>
                    <li class="liens-accueil margin-tpo"><a class="wiki" href="">Source : Wekipédia - Ville de Lisbon</a></li>
                </ul>
            </div>
        </main>
    </div>
</body>

</html>