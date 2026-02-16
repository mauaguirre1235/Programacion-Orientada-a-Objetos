<?php 
declare(strict_types=1);
include 'includes/header.php';

// Definir una clase Producto
class Producto {
    // Propiedades
    public $nombre;
    public $precio;
    public $disponible;
    
    // Constructor
    public function __construct( string $nombre, int $precio, bool $disponible) 
    {
        // Asignar los valores a las propiedades
        $this->nombre = $nombre; 
        $this->precio = $precio;
        $this->disponible = $disponible; 
    }
}

// Crear una instancia de la clase Producto
$producto = new Producto('Televisor', 500, true);


echo '<pre>';
var_dump($producto);
echo '</pre>'; 

$producto2 = new Producto('Tablet', 300, false);


echo '<pre>';
var_dump($producto2);
echo '</pre>'; 


include 'includes/footer.php';