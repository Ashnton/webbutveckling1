<!DOCTYPE html>
<html lang="sv">
<head>
      <meta charset="utf-8" />
      <title>Antons lådor</title>
      <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <?php 
                include 'elements/nav.php';
            ?>
        </header>
        <article class="content">
            <div class="hero-div">
                <div class="hero-header">
                    
                    <h1 class="text-header">Antons lådor</h1>
                    <h2>Marknadens bästa lådor</h2>

                </div>

                <button class="btn-see-more" onclick="window.location.href='#gallery-div'"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                    </svg>
                    <br>
                    Läs mer   
                </button>
            </div>

            <div id="gallery-div">
                <?php 
                    include 'classes/box-shower.php';
                ?>
            </div>
            <div id="about-div" class="wrapper">
                <h2 class="text-center">Om Anton</h2>
                <p>
                    Anton var en enkel man som levde ett enkelt liv. Han hade alltid drömt om att ha en egen butik, men hans drömmar krossades när hans fru insjuknade i cancer och dog kort därefter. Anton blev ensam och deprimerad, och hans liv förlorade all mening.
                </p>
                    
                <p>
                    En dag när Anton gick på en promenad, stötte han på en gammal man som satt vid sidan av vägen och sålde lådor. Anton stannade till för att prata med honom och upptäckte att mannen var en pensionerad snickare som hade tagit upp att sälja sina handgjorda lådor som en hobby.
                </p>

                <p>
                    Anton köpte en låda och märkte hur den fick honom att känna sig bättre på något sätt. Han började köpa fler lådor och så småningom började han själv göra lådor som en terapi för att hantera sin sorg. Han kunde inte riktigt förklara varför, men själva processen med att skapa något med sina händer gav honom en känsla av mening och tillfredsställelse.
                </p>

                <p>
                    En dag bestämde han sig för att försöka sälja några av sina lådor på marknaden, och de sålde snabbt slut. Anton insåg att han kunde ha hittat sin kallelse i livet, och började sälja sina lådor på heltid.
                </p>

                <p>
                    Så småningom blev Anton känd som "lådman" i sin stad, och hans lådor blev mycket populära. Han fortsatte att göra lådor som en terapi för sin sorg, men han såg också hur hans butik gav andra människor glädje och mening i deras liv.
                </p>

                <p>
                    Anton visste att hans fru alltid hade velat att han skulle följa sina drömmar, och han visste att hon skulle vara stolt över honom. Så, även om hans hjärta fortfarande var trasigt, fortsatte han att göra det han älskade mest - att göra lådor och sälja dem till andra.
                </p>





            </div>
        </article>
        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/gallery.js"></script>
</body>
</html>