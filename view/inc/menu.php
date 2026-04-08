<div class="menu-container-default">
    <nav class="">
        <ul class="nav-links">
            <li <?php if (!isset($_GET['pages'])) echo ("class='active'") ?>><a  id="accueil" href="./">Accueil</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "geographie") echo ("class='active'") ?>><a  id="geographie" href="./?pages=geographie">geographie</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "histoire") echo ("class='active'") ?>><a id="histoire" href="./?pages=histoire">histoire</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "culture") echo ("class='active'") ?>><a id="culture" href="./?pages=culture">culture</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "galerie") echo ("class='active'") ?>><a id="galerie" href="./?pages=galerie">galerie</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "contact") echo ("class='active'") ?>><a id="contact" href="./?pages=contact">contact</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "liens") echo ("class='active'") ?>><a id="liens" href="./?pages=liens">liens</a></li>
        </ul>
    </nav>
</div>