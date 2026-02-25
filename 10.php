<?php include 'includes/header.php';

// conectar la base de datos con PDO
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

$query = "SELECT titulo, imagen from propiedades";

// Consultar la base de datos
$stmt = $db->prepare($query);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$resultado  = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Iterar sobre los resultados
foreach($resultado as $propiedad): 
    echo $propiedad['titulo'] . '<br>'  ; 
    echo $propiedad['imagen'] . '<br>'  ;   
endforeach;




include 'includes/footer.php';