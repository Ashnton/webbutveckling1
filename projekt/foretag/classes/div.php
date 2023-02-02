<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div</title>

    <style>
        .product-div {
            display: grid;
            grid-template-columns: 60% 40%;
            grid-template-areas: 
            'product-info product-buy';

            border: solid coral 0.125rem;
            padding: 2rem;
            gap: 2rem;
        }
        .product-info {
            grid-area: product-info;
        }
        .product-buy {
            grid-area: product-buy;
        }
        .btn-buy {
            font-size: clamp(2rem, 5vw, 3em);
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="product-div">
        <div class="product-info">
            <h1 class="product-name">Låda1</h1>
            <p class="product-description">En prima låda</p>
            <p class="product-dimensions">10*10*10 mm</p>
        </div>
        <div class="product-buy">
            <button class="btn-buy">Köp</button>
            <h3 class="product-price">Pris: 349 kr</h3>
        </div>
    </div>
</body>
</html>