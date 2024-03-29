<!DOCTYPE html>
<html lang="sv">
<head>
    <?php
        include 'elements/head.php';
    ?>
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <?php 
                include 'elements/nav.php';
            ?>
        </header>
        <article class="content">
            <h1 class="text-center text-header">Vanliga frågor</h1>
            <section class="FAQ-container wrapper">
                <div class="flex-between">
                    <h2>När kommer min låda?</h2>
    
                    <button id="toggle_1" class="btn-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </div>
                <p id="answer1" data-visible="1">Din låda kommer inom tre till fyra helgdagar, om din låda ej anlänt läser du denna texten igen.</p>
                
                <div class="flex-between">
                    <h2>Min låda var sönder, kan jag få en ny?</h2>
    
                    <button id="toggle_2" class="btn-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </div>
                <p id="answer2" data-visible="1">Om du har bevis för att lådan anlände i ofullständigt skick kan du får köpa en ny till halva priset.</p>

                <div class="flex-between">
                    <h2>Hur många lådor får jag köpa?</h2>
    
                    <button id="toggle_3" class="btn-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </div>
                <p id="answer3" data-visible="1">Du får köpa så många lådor som du har råd med.</p>

                <div class="flex-between">
                    <h2>Hur länge har ni sålt lådor?</h2>
    
                    <button id="toggle_4" class="btn-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </div>
                <p id="answer4" data-visible="1">Vi har sålt lådor sedan 2013.</p>

                <div class="flex-between">
                    <h2>Har ni många femstjärniga recensioner?</h2>
    
                    <button id="toggle_5" class="btn-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </div>
                <p id="answer5" data-visible="1">Vi har 100% nöjda kunder.</p>
            </section>

            <section class="wrapper">
                <h2 class="subheading">Fler frågor? Kontakta oss!</h2>

                <form method="POST" action="https://www.bestonline.se/formripper/rippform.php">
                    <label for="name">Namn</label>
                    <input type="text" name="name" id="name" placeholder="Förnamn Efternamn">

                    <label for="email">E-postadress</label>
                    <input type="email" name="email" id="email" placeholder="E-postadress">

                    <label for="subject">Ämne</label>
                    <input type="text" name="subject" id="subject" placeholder="Ämne">

                    <label for="message">Meddelande</label>
                    <textarea name="message" id="message" placeholder="Meddelande"></textarea>

                    <label for="pw">Lösenord</label>
                    <input type="password" name="pw" id="pw" size="10" value="" placeholder="Lösenord">
                    
                    <button type="submit" class="btn-buy">Skicka meddelande</button>
                    
                    <!-- Sist i formuläret -->
                    <input type="hidden" name="s_email" value="antonlm@varmdogymnasium.se">
                    <input type="hidden" name="s_retur" value="https://labb.vgy.se/~antonlm/projekt/foretag/help.php">
                </form>
            </section>

        </article>
        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/faq.js"></script>
</body>
</html>