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
            <h1 class="titre">Pour nous contacter</h1>
            <div class="conteneur-img">
                <img src="./img/contacts.jpg" alt="">
            </div>
            <div class="text-conteneur">
                <h2 class="text-general center">Pour nous laisser un commentaire ou pour obtenir un rensegnement complémentaire, remplissez le formulaire ci-dessous :</h2>
                <form action="submit.php" method="post">
                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="Najib" required>
                    </div>
                    <div>
                        <label for="prenom">Prenom :</label>
                        <input type="text" id="prenom" name="prenom" placeholder="mohamed" required>
                    </div>
                    <div>
                        <label for="ville">Ville :</label>
                        <input type="text" id="ville" name="ville" placeholder="Lisbon" required>
                    </div>
                    <div>
                        <label for="e-mail">E-mail :</label>
                        <input type="email" id="email" name="email" placeholder="mail@gmail.com" required>
                    </div>
                    <div>
                        <label for="commentaire">Commentaire :</label>
                        <textarea id="commentaire" name="commentaire" placeholder="Votre commentaire ici..." required></textarea>
                    </div>
                    <div class="btn-conteneur">
                        <button class="btn-submit" type="submit">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>