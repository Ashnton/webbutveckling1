<?php
    include 'products-system.php';
    
    $count = 0;
    foreach ($boxes as $box) {
        $count++;
        $productURL = "'product.php?box=box".$count."'";

        echo '<div class="product-div" onclick="window.location.href='.$productURL.'">';
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
            echo '<button productId="'.$count.'" class="btn-buy">Köp</button>';
            echo '<h3 class="product-price">Pris: ';
            echo $box->price;        
            echo ' kr</h3>';
            echo '</div>';
        echo '</div>';
    }
?>