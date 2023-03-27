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
            <h1 class="text-center text-header">Jämför produkter</h1>
                <div class="comparison-select-container">

                    <select name="product-picker1" class="product-picker" id="product-picker1">
                        <?php
                            include 'classes/products-system.php';

                            $count = 0;
                            foreach ($boxes as $box) {
                                $name = $box->name;
                                $count++;

                                echo '<option value="box'.$count.'">';
                                echo $name;
                                echo '</option>';
                            }
                            ?>
                    </select>
                    
                    <button class="btn-primary2" id="compare-btn">Jämför</button>
                    
                    <select name="product-picker2" class="product-picker" id="product-picker2">
                        <?php
                            $count = 0;
                            foreach ($boxes as $box) {
                                $name = $box->name;
                                $count++;
                                
                                echo '<option value="box'.$count.'">';
                                echo $name;
                                echo '</option>';
                            }
                        ?>
                    </select>
                
                </div>
                    
                <div class="product-container">
                    
                    <?php

                        foreach($boxes as $box) {
                            $slideID = $slideID + 1;
                            $productURL = "'product.php?box=box".$slideID."'";

                            echo '<div class="product-div hide" id="box'.$slideID.'" onclick="window.location.href='.$productURL.'">';
                            echo '<div class="product-info">';
                            echo '<img class="product-image-preview" src="bilder/box1.jpg">';
                            echo '<h1 class="product-title">';
                            echo $box->name;
                            echo '</h1>';
                            echo '<p class="product-description">';
                            echo $box->description;
                            echo '</p>';
                            echo '<p class="product-dimensions">Mått: ';
                            echo $box->width;
                            echo '*';
                            echo $box->depth;
                            echo '*';
                            echo $box->height;
                            echo ' mm</p>';
                            echo '</div>';
                            echo '<div class="product-buy">';
                            echo '<button productId="'.$slideID.'" class="btn-buy">Köp</button>';
                            echo '<h3 class="product-price">Pris: ';
                            echo $box->price;        
                            echo ' kr</h3>';
                            echo '</div>';
                            echo '</div>';
                        }

                    ?>

                </div>
                <!-- </div> -->
        </article>

        <footer id="footer" class="footer">
            <?php
                include 'elements/footer.php';
            ?>
        </footer>
    </div>
    <script src="js/compare.js"></script>
</body>
</html>