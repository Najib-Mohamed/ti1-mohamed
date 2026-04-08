<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>culture</title>
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
            <h1 class="titre">Art et culture</h1>
            <?php
            // chemin absolu
            include ROOT_PATH . "/view/inc/menu-gsm.php";
            // chemin relatif (en PHP à partir de la page qui appelle)
            # include "inc/menu.php";
            ?>
            <div class="conteneur-img">
                <img src="./img/culture.jpg" alt="">
            </div>
            <div class="text-conteneur">
                <p class="text-justify text-general">
                    Épicentre des découvertes, et capitale d'un vaste empire depuis le xve siècle, la ville a depuis longtemps été le point de rencontre de diverses cultures. En maintenant des relations étroites avec les anciennes colonies portugaises désormais indépendantes, Lisbonne est une ville cosmopolite.
                </p>
                <p class="text-justify text-general">
                    Depuis qu'elle a été capitale européenne de la culture en 1994, Lisbonne a accueilli une série d'événements internationaux, comme l'Expo 1998 ou encore l'Euro 2004, qui ont eu un fort impact dans le développement des activités culturelles et de leurs infrastructures. Plusieurs grandes manifestations comme la Gymnaestrada, le MTV Europe Music Awards et le Rally Dakar, ou le 50e anniversaire de la Tall Ships' Races sont passées par Lisbonne.
                </p>
                <p class="text-justify text-general">
                    Ainsi, le passage au xxie siècle a vu les salles de théâtre et de cinéma se multiplier tout comme les constructions de pavillons d'exposition, de musées, d'équipements sportifs, et autres. Le développement de l'économie lisboète a entraîné conséquemment une explosion de marketing et de mécénat. Les grandes salles de spectacle, les musées et d'autres institutions exhibent aujourd'hui les logos des plus grandes entreprises du pays et de multinationales.
                </p>
                <p class="text-justify text-general">
                    Tous les deux ans, en alternance avec Rio de Janeiro, Lisbonne accueille le plus grand festival du monde Rock in Rio. L’événement se tient au Parque da Bela Vista, avec la présence de 70 artistes sur quatre scènes au cours des cinq jours du festival, qui réunissent 385 000 spectateurs. Lors de l'édition 2014 célébrant les 10 ans du festival, de grands artistes se sont produits sur la grande scène lisboète tels que The Rolling Stones, Justin Timberlake, Robbie Williams, Linkin Park, Ed Sheeran, Jessie J, Lorde.
                </p>
                <h2 class="text-general">Espaces publics et musées</h2>
                <ul>
                    <li class="text-general">Museu Nacional de Arqueologia</li>
                    <li class="text-general">Museu Nacional de Arte Antiga (beaux arts)</li>
                    <li class="text-general">Musée Calouste-Gulbenkian (beaux arts)</li>
                    <li class="text-general">Musée de l'électricité</li>
                    <li class="text-general">Musée Colecção Berardo102 (art moderne)</li>
                    <li class="text-general">Museu de Marinha (Musée de la Marine, près du monastère du Belém)</li>
                    <li class="text-general">Musée national de l'azulejo (céramiques)</li>
                    <li class="text-general">Oceanarium de Lisbonne</li>
                    <li class="text-general">Musée de l'Orient</li>
                </ul>
                <h2 class="text-general">Salles de spectacles</h2>
                <ul>
                    <li class="text-general">Teatro Maria Vitória</li>
                    <li class="text-general">Teatro da Trindade</li>
                    <li class="text-general">Teatro Nacional D. Maria II</li>
                    <li class="text-general">Teatro Nacional São Carlos</li>
                    <li class="text-general">Teatro Nacional São Luiz</li>
                    <li class="text-general">Teatro Politeama</li>
                </ul>
                <h2 class="text-general">Quartiers historiques et monuments</h2>
                <p class="text-general">
                    Le principal édifice religieux de Lisbonne est la Cathédrale Santa Maria Maior.
                    Parmi les autres édifices religieux de la ville, on note le Monastère de Saint-Vincent de Fora, l'Église São Domingos de Lisbonne, l'Église Sainte-Isabelle de Lisbonne
                </p>
                <p class="text-general">
                    La Baixa pombalina est le cœur de la ville. Elle occupe la partie de l'ancienne ville qui a été détruite par le tremblement de terre de 1755. Sa planification urbaine, un quadrillage de rues et des bâtiments semblables dans un style pombalin, est due au marquis de Pombal. Le quartier est en pleine réhabilitation urbaine, c'est aussi le plus grand quartier commercial de Lisbonne. L'un des monuments les plus visités de la Baixa est l'Ascenseur de Santa Justa.
                </p>
                <p class="text-general">
                    On y trouve les plus belles places de la ville comme la Praça dos Restauradores, la Praça Dom Pedro IV avec le théâtre national Dona Maria II, la Praça da Figueira et, la plus célèbre, la Praça do Comércio.
                </p>
                <p class="text-general">
                    Le Chiado est le quartier chic du vieux Lisbonne, il est situé entre la Baixa pombalina et le Bairro Alto. Un grand incendie l'a partiellement ravagé le 25 août 1988, Alvaro Siza fut architecte pour la reconstruction.
                </p>
                <p class="text-general">
                    Dans ce deuxième quartier, se situent le célèbre café A Brasileira, fréquenté jadis par Fernando Pessoa dont la statue en bronze décore la terrasse, la salle d'opéra Teatro Nacional de São Carlos ainsi que le couvent des Carmes, l'église la plus grande de Lisbonne avant le tremblement de terre de 1755.
                </p>
                <p class="text-general">
                    L'Alfama est un quartier aux rues étroites, qui a survécu au séisme de Lisbonne. C'est le berceau d'un style musical portugais : le fado. Dans l'Alfama se trouvent la majorité des cafés-concerts de fado, où l'on peut écouter les chansons autour d'un verre ou d'un dîner. Comparé au Bairro Alto, l'Alfama est un quartier beaucoup plus tranquille. On y trouve aussi la cathédrale ainsi que le château Saint-Georges. Ce quartier est considéré comme l'âme de la ville.
                </p>
                <p class="text-general">
                    Le Bairro Alto est l'un des quartiers du centre de Lisbonne, à proximité des quartiers du Carmo et du Chiado. Il était autrefois appelé Vila Nova dos Andrades. C'est un secteur commercial, de divertissement et résidentiel.
                </p>
                <p class="text-general">
                    Construit à la fin du xvie siècle suivant un plan plus ou moins octogonal, le Bairro Alto est un des quartiers les plus pittoresques de la ville. Actuellement, le Bairro Alto est le lieu de réunion des jeunes de la ville et l'une des principales zones de loisirs nocturnes.

                </p>
                <p class="text-general">
                    Quartier ouest de Lisbonne, Belém est connu pour ses nombreux monuments anciens, dont la tour de Belém, le Padrão dos Descobrimentos (« Monument aux Découvertes ») et le monastère des Hiéronymites. Situé au bout de l'estuaire du Tage, de ses quais partaient les navigateurs-explorateurs du xve au xviie siècle. Environ 10 000 personnes habitent ce quartier.
                </p>
                <p class="text-general">

                </p>
                <p class="text-general">
                    La quartier de Beato se distingue par la nouvelle dynamique culturelle qu'il connaît depuis 2018. Les zones de production et les installations industrielles se transforment en galeries d'art contemporain, lieux de vie nocturne, marchés, restaurants. Dans ce quartier se trouve notamment le Musée national de l'Azulejo et le Palacio do Grilo.
                </p>
                <h2 class="text-general">Lisboètes renommés</h2>
                <ul>
                    <li class="text-general">Saint Antoine de Padoue (1195)</li>
                    <li class="text-general">Gracia Nasi, ou Béatrice de Luna (1510-1568)</li>
                    <li class="text-general">Luís de Camões (1525-1580), poète</li>
                    <li class="text-general">Catherine de Bragance (1638-1705), reine consort du roi Charles II d'Angleterre</li>
                    <li class="text-general">Pedro Antonio Correia Garção (1724-1772), poète portugais, né et mort à Lisbonne</li>
                    <li class="text-general">Wenceslau de Moraes (1854-1929), officier de la marine, consul et écrivain</li>
                    <li class="text-general">Fernando Pessoa (né en 1888-mort également à Lisbonne en 1935), poète</li>
                    <li class="text-general">Maria Elena Vieira da Silva (1908-1992), peintre</li>
                    <li class="text-general">Amália Rodrigues (1920-1999), fadiste</li>
                    <li class="text-general">Maria Judite de Carvalho (1921-1998), écrivain</li>
                    <li class="text-general">José Saramago (1922-2010), écrivain, prix Nobel de littérature en 1998</li>
                    <li class="text-general">Jaime Montestrela (1925-1975), écrivain et poète</li>
                    <li class="text-general">Ana Daniel, (1928-2011), poète</li>
                    <li class="text-general">Paula Rego (née en 1935), peintre, illustratrice</li>
                    <li class="text-general">Gonçalo Byrne, architecte (né en 1941)</li>
                    <li class="text-general">António Lobo Antunes (né en 1942), écrivain</li>
                    <li class="text-general">Luis Rego (né en 1943), réalisateur, acteur, scénariste, compositeur</li>
                    <li class="text-general">Maria João Pires (née en 1944), pianiste</li>
                    <li class="text-general">Jorge Palma (né en 1950), chanteur</li>
                    <li class="text-general">Júlia Ventura (née en 1952), artiste peintre et photographe d'art contemporain</li>
                    <li class="text-general">Rui Veloso (né en 1957), chanteur fondateur du rock portugais</li>
                    <li class="text-general">Maria Ramos (née en 1959) femme d'affaires sud-africaine</li>
                    <li class="text-general">Pedro Costa (né en 1959), cinéaste</li>
                    <li class="text-general">Rui Costa (né en 1972), ancien footballeur de l'équipe du Portugal, du SL Benfica et AC Milan</li>
                    <li class="text-general">Fernando Ribeiro (né en 1974), chanteur du groupe portugais de metal gothique Moonspell</li>
                    <li class="text-general">Maniche (né en 1977), footballeur évoluant au Sporting Portugal</li>
                    <li class="text-general">Tatiana Salem Levy (née en 1979), traductrice et femme de lettres brésilienne</li>
                    <li class="text-general">Monica Sintra (1978-), chanteuse née à Lisbonne</li>
                    <li class="text-general">Soraia Chaves (née en 1982), actrice et mannequin</li>
                    <li class="text-general">Salvador Sobral (né en 1989), chanteur, gagnant du Concours Eurovision de la chanson 2017</li>
                    <li class="text-general">Bernardo Silva (né en 1994), joueur de football</li>
                </ul>
            </div>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>