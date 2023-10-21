<?php
// Extraccion de datos y decodificacion de json 
$data = file_get_contents("PruebasTecnicas-main/movies.json");
$movies = json_decode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Peliculas</title>
    <link href="estilos.css" rel="stylesheet">
    
</head>
<body>
    
    <h1>Lista de Peliculas </h1>
        <form method=post href="index.php">
            <input type="text" value="Agregar Genero" name="genero">
            <input type="submit" value="Enviar">
        </form>
            
        
        
        <?php 
        
        //Creacion de contenedores de Peliculas, con sus datos
        for ($i = 0; $i < count($movies); $i++) {
            echo "<div class='container'>";
            echo "<h1> Titulo: ".$movies[$i]['title']."</h1>";
            echo "<p> Año de estreno: ".$movies[$i]['year']."</p>";
            echo "<p> Dia de estreno: ".$movies[$i]['releaseDate']."</p>";
            echo "<p> Titulo Original: ".$movies[$i]['originalTitle']."</p>";
            echo "<p> Resumen: ".$movies[$i]['storyline']."</p>";
            echo "Lista de actores";
            echo "<ul>";
            for ($j = 0; $j < 3; $j++ ){
                
                echo "<li>".$movies[$i]['actors'][$j]."</li>";
                
            }
            echo "</ul>";
            echo "<br>";
            echo "<img src='";
            echo $movies[$i]['posterurl'];
            echo "'> <br>";
            echo "<form method='post' href='index.php'>";
            echo "<input type='submit' value='Agregar a Favoritos' name='Favoritos'> ";
            echo "</div>";
            echo "</form>";
            echo "</div>";
        }   
        //Creacion de favoritos
        
        ?>    
</body>
</html>

