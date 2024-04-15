<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>TAIGLACEPRI</title>
    <style>
        .menu {
            border: 5px solid black;
            margin-bottom: 20px;
        }
        body {
            background-image: url('./img/fondo-restaurante.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <em><h1>RESTAURANTE TAIGLACEPRI</h1></em>
    <br>
    <div class="column-3 columns">
        <div class="menu">
            <u><h2>PIZZAS🍕</h2></u>
            <?php
            if (file_exists('./xml/carta.xml')) {
                $platos = simplexml_load_file('./xml/carta.xml');
                foreach ($platos->pizzas as $pizzas) {
                    echo "<strong>" . $pizzas['nombre'] . "</strong>";
                    echo "Precio: " . $pizzas['precio'] . "<br>";
                    echo " " . $pizzas['descripcion'] . "<br>";
                    echo "Calorías: " . $pizzas['kcal'] . "<br>";
                    echo "Ingredientes:<br>";
                    foreach ($pizzas->ingrediente as $ingrediente) {
                        echo $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante CERRADO!');
            }
            ?>
        </div>
    <div class="menu">
    <u><h2>PASTA🍝</h2></u>
    <?php
            if (file_exists('./xml/carta.xml')) {
                $platos = simplexml_load_file('./xml/carta.xml');
                foreach ($platos->pasta as $pasta) {
                    echo "<strong>" . $pasta['nombre'] . "</strong>";
                    echo "Precio: " . $pasta['precio'] . "<br>";
                    echo " " . $pasta['descripcion'] . "<br>";
                    echo "Calorías: " . $pasta['kcal'] . "<br>";
                    echo "Ingredientes:<br>";
                    foreach ($pasta->ingrediente as $ingrediente) {
                        echo $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante CERRADO!');
            }
            ?>
    </div>
    <div class="menu">
    <u><h2>POSTRES🍰</h2></u>
    <?php
if (file_exists('./xml/carta.xml')) {
    $platos = simplexml_load_file('./xml/carta.xml');
    foreach ($platos->postre as $postre) {
        echo "<strong>" . $postre['nombre'] . "</strong>";
        echo "Precio: " . $postre['precio'] . "<br>";
        echo " " . $postre['descripcion'] . "<br>";
        echo "Calorías: " . $postre['kcal'] . "<br>";
        echo "Ingredientes:<br>";
        foreach ($postre->ingrediente as $ingrediente) {
            echo $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Restaurante CERRADO!');
}
?>
    </div>
</br>
<div class="final">
    <ol>🥚  Contiene lacteos</ol>
    <ol>🥬  Contiene Ingredientes veganos o vegetarianos.</ol>
    <ol>🥩  Contienes ingredientes cárnicos.</ol>
    <ol>🥖  Contiene ingredientes no aptos para celíacos.</ol>
</div>
</body>
</html>
