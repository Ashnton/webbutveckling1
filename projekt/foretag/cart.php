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
        <article class="content wrapper">
            <section id="cart-container">
            </section>
            <section id="order-container">
                <form method="POST" action="">
                    <label for="name">Namn</label>
                    <input type="type" name="name" id="name" placeholder="Namn" required>

                    <label for="email">E-postadress</label>
                    <input type="email" name="email" id="email" placeholder="E-postadress" required>

                    <label for="phonenr">Telefonnummer</label>
                    <input type="tel" name="phonenr" id="phonenr" placeholder="Telefonnummer" required>

                    <label for="address">Adress</label>
                    <input type="text" name="address" id="address" placeholder="Adress" required>

                    <label for="zip">Postnummer</label>
                    <input type="text" name="zip" id="zip" placeholder="Postnummer" required>

                    <label for="city">Ort</label>
                    <input type="text" name="city" id="city" placeholder="Ort" required>

                    <button type="submit">Slutför beställning</button>
                </form>
            </section>
        </article>
        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/cart.js"></script>
</body>
</html>