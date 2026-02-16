<?php 
declare(strict_types=1);
include 'includes/header.php';

// ENCAPSULACION    

// Definir una clase Producto
class Producto {


    // public - se pudee acceder y modificiar en culquier parte del código
    // protected - solo se puede acceder y modificar dentro de la clase y sus subclases
    // private - solo se puede acceder y modificar dentro de la clase
    
    // Constructor para inicializar las propiedades de la clase
    public function __construct(private string $nombre, public int $precio,public bool $disponible) 
    {
     
    }
    // Método para mostrar la información del producto
         public function mostrarProducto() : void{
         echo "El producto es: " .  $this->nombre . " y su precio es de:  " . $this->precio; 

    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;  
    }

}

// Crear una instancia de la clase Producto
$producto = new Producto('Televisor curvo', 500, true);
// $producto->mostrarProducto(); 

echo $producto->getNombre(); 
$producto->setNombre('Nuevo Nombre');


echo '<pre>';
var_dump($producto);
echo '</pre>'; 

$producto2 = new Producto('Tablet', 300, false);
// $producto2->mostrarProducto(); 
echo $producto2->getNombre();

// echo '<pre>';
// var_dump($producto2);
// echo '</pre>'; 


include 'includes/footer.php';