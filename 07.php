<?php include 'includes/header.php';

// Polimorfismo: Es la capacidad de un objeto de tomar muchas formas. En PHP, esto se logra a través de interfaces y clases abstractas.
// Permite que una clase implemente múltiples interfaces o herede de una clase abstracta, lo que facilita la reutilización del código y la flexibilidad en el diseño de software.

interface TransporteInterfaz {

    public function getInfo() : string; 
    public function getRuedas() : int; 
   
}

class Transporte implements TransporteInterfaz {
    
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    public function getInfo() : string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas "; 
   
        }

    public function getRuedas() : int {
        return $this->ruedas; 
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {

    }

     public function getInfo() : string
    {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y es de color " . $this->color; 
   
        }

    public function getColor() : string 
    {
        return "El color es " . $this->color; 
    }
    

}

echo "<pre>";
var_dump($transporte = new Transporte(4, 20, "rojo"));
var_dump($auto = new Automovil(4, 4, "verde")); 

echo $transporte->getInfo();
 echo "<br>"; 
echo $auto->getInfo();  
echo "<br>";    
echo $auto->getColor(); 

echo "</pre>";

include 'includes/footer.php';