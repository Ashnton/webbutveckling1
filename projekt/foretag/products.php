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
</body>
</html>