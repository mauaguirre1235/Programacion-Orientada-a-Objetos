<?php include 'includes/header.php';

// Conectar a la BD con MYSAQLI
$db = new mysqli ('localhost','root','root','bienesraices_crud');  


// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// lo preparamos
$stmt = $db->prepare($query);    

// lo ejecutamos
$stmt->execute();

// creamos una variable para guardar el resultado
$stmt->bind_result($titulo, $imagen);    

// asignamos el resultado 


// imprimir el resultado    

while($stmt->fetch()): 
    var_dump($titulo);
    endwhile;
// var_dump($resultado->fetch_assoc()); 
include 'includes/footer.php';