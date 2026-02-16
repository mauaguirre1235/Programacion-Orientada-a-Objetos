<?php 
declare(strict_types=1);
include 'includes/header.php';

// METODO ESTATICOS   

// Definir una clase Producto
class Producto {

    public $imagen; 
    public static $imagenPlaceholder = "Imagen.jpg";

    // Constructor para inicializar las propiedades de la clase
    public function __construct(private string $nombre, public int $precio,public bool $disponible, string $imagen ) 
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen; 
        }
     
    }

    public static function obtenerImagenProducto() {
      return self::$imagenPlaceholder;
    
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
$producto = new Producto('Televisor curvo', 500, true, '');
// $producto->mostrarProducto(); 

echo $producto->obtenerImagenProducto();

echo $producto->getNombre(); 
$producto->setNombre('Nuevo Nombre');


echo '<pre>';
var_dump($producto);
echo '</pre>'; 

$producto2 = new Producto('Tablet', 300, false, 'Tablet.jpg');
// $producto2->mostrarProducto(); 
echo $producto2->getNombre();

echo $producto2->obtenerImagenProducto();

// echo '<pre>';
// var_dump($producto2);
// echo '</pre>'; 


include 'includes/footer.php';