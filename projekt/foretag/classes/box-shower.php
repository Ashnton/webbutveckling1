<?php
    // include 'products.php';
    include 'products-system.php';

    $slideID = 0;
    $productAmount = count($boxes);

    echo '<h2 id="front-products-header" class="subheading text-center" data-slideAmount="'.$productAmount.'">Våra lådor</h2>';
    foreach($boxes as $box) {
            $slideID = $slideID + 1;
            $productURL = "'product.php?box=box".$slideID."'";

            echo '<div class="product-div slide" id="slide'.$slideID.'" onclick="window.location.href='.$productURL.'">';
            echo '<div class="product-info">';
            echo '<img class="product-image-preview" src="';
            echo $box->image;
            echo '" alt="'.$box->name.'">';
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
            echo '<button data-productId="'.$slideID.'" class="btn-buy">Köp</button>';
            echo '<h3 class="product-price">Pris: ';
            echo $box->price;        
            echo ' kr</h3>';
            echo '</div>';
            echo '</div>';
    }
?>