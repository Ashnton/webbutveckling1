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
            <div class="product-container">
                <?php
                    include 'classes/single-product-displayer.php';
                ?>
            </div>
        </article>
        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/addToCart.js"></script>
</body>
</html>