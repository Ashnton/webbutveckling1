<?php
    include 'products.php';

    foreach($boxes as $info) {
            $oID = $info['id'];
            $slideID = $slideID + 1;

            echo' <div class="slide" id="slide'.$slideID.'"><div class="front-openings">
            <div class="opening">
                '.$info["name"].'
            </div>
            </div>
            </div>
            </div>';
            }
?>