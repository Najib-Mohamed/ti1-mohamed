<div class="menu-container-gsm">
    <div class="menu-toggle-container">
        <button class="menu-toggle"><span class="burguer">☰</span> menu</button>
    </div>
    <nav class="nav-default">
        <ul class="nav-links">
            <li <?php if (!isset($_GET['pages'])) echo ("class='page-actuelle'") ?>><a id="accueil" href="./">Accueil</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "geographie") echo ("class='page-actuelle'") ?>><a id="geographie" href="./?pages=geographie">geographie</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "histoire") echo ("class='page-actuelle'") ?>><a id="histoire" href="./?pages=histoire">histoire</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "culture") echo ("class='page-actuelle'") ?>><a id="culture" href="./?pages=culture">culture</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "galerie") echo ("class='page-actuelle'") ?>><a id="galerie" href="./?pages=galerie">galerie</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "contact") echo ("class='page-actuelle'") ?>><a id="contact" href="./?pages=contact">contact</a></li>
            <li <?php if (isset($_GET['pages']) && $_GET['pages'] == "liens") echo ("class='page-actuelle'") ?>><a id="liens" href="./?pages=liens">liens</a></li>
        </ul>
    </nav>
</div>