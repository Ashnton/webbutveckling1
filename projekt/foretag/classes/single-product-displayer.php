<?php
    include 'products-system.php';

    $box = str_replace("box", "", $_GET["box"]);
    $box--;
    $box = $boxes[$box];

        echo '<div class="product-div">';
            echo '<div class="product-info">';
            echo '<img class="product-image-preview" src="'.$box->image.'" alt="'.$box->name.'">';
            echo '<h2 class="product-title">';
            echo $box->name;
            echo '</h2>';
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
            echo '<button class="btn-buy" id="'.$box->name.'" data-productPrice="'.$box->price.'">Köp</button>';
            echo '<h3 class="product-price">Pris: ';
            echo $box->price;        
            echo ' kr</h3>';
            echo '</div>';
        echo '</div>';
?>