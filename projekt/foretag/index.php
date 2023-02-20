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
            <h1 class="text-header">Antons lådor</h1>
            <h2>Marknadens bästa lådor</h2>

            <div id="gallery-div">
                <h2 class="text-center">Våra lådor</h2>
                
                <?php 
                    include 'classes/box-shower.php';
                ?>
            </div>
            <div id="about-div">
                <h2 class="text-center">Om Anton</h2>
                <p>
                    En hjärtskärande berättelse om hur Anton gav sig in i lådmarknaden. 
                </p>
            </div>
        </article>
        <footer id="footer" class="footer">My footer</footer>
    </div>
</body>
</html>