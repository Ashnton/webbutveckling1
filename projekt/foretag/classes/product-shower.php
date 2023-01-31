<?php
    include 'products-system.php';
    
    foreach ($boxes as $box) {
        echo '<h1>';
        echo $box->name;
        echo '</h1>';
        echo '<p>';
        echo $box->description;
        echo '</p>';

        echo '<h3>Pris: ';
        echo $box->price;        
        echo ' kr</h3>';
        echo '<p>Mått: ';
        echo $box->width;
        echo '*';
        echo $box->depth;
        echo '*';
        echo $box->height;
        echo ' mm</p>';
    }
?>