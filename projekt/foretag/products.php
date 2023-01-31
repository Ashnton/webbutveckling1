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
            <h1>Våra produkter</h1>
            <?php
                include 'classes/product-shower.php';
            ?>
        </article>
        <footer id="footer" class="footer">My footer</footer>
    </div>
</body>
</html>