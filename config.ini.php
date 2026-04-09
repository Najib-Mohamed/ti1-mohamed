<?php
# Fichier protégé par le .gitignore 
# On pourra donc y mettre de constantes critiques
# Comme des login / mots de passe / clés etc...
# Si non présent, on duplique config.ini.php 
# sous le nom de config.php
# Et on met les constantes à jours
// racine du projet quelque soit son emplacement
const ROOT_PATH = __dir__; 
// Pages acceptées pour le projet
// Ce sont les nom des pages PHP
// acceptées mises dans le dossier
// view/ mise à part la homepage et la 404
const ARRAY_VALID_PAGES = [
    "geographie",
    "histoire",
    "culture",
    "galerie",
    "contact",
    "liens",
];