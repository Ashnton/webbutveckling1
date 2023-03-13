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
            <h1 class="text-center text-header">Våra produkter</h1>
                <div class="product-container">
                    <?php
                        include 'classes/product-shower.php';
                    ?>
                </div>
        </article>
        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/storePage.js"></script>
</body>
</html>