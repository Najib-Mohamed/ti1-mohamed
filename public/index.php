<?php
# public/index.php 

/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';
// si non existence de la variable
// $_GET nommée 'pages'
if (!isset($_GET['pages'])) {

    // Nous sommes sur l'accueil
    // chargement de view/accueil.php
    include ROOT_PATH . "/view/accueil.php";

    // sinon si la variable get 'pages' est dans le
    // tableau ARRAY_VALID_PAGES    
} elseif (in_array($_GET['pages'], ARRAY_VALID_PAGES)) {
    // inclusion de la vue autorisée
    include ROOT_PATH . "/view/" . $_GET['pages'] . ".php";

    // sinon (p non valide)    
} else {
    include ROOT_PATH . "/view/error404.php";
}