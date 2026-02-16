<?php 
declare(strict_types=1);
include 'includes/header.php';

// Definir una clase Producto
class Producto {
    
    // Constructor para inicializar las propiedades de la clase
    public function __construct( public string $nombre, public int $precio,public bool $disponible) 
    {
     
    }
}

// Crear una instancia de la clase Producto
$producto = new Producto('Televisor curvo', 500, true);


echo '<pre>';
var_dump($producto);
echo '</pre>'; 

$producto2 = new Producto('Tablet', 300, false);


echo '<pre>';
var_dump($producto2);
echo '</pre>'; 


include 'includes/footer.php';