<?php include 'includes/header.php';

// // Incluir las otras clases 


// require 'clases/Clientes.php';  

// require 'clases/Detalles.php';  

use App\Clientes;
use App\Detalles;

function mi_autoload($clase){
  
    $parte = explode('\\', $clase); 
     

  
     require __DIR__ . '/clases/' . $parte[1] . '.php';
    
}
spl_autoload_register('mi_autoload');



$detalles = new App\Detalles();
$clientes = new App\Clientes(); 
$clientes2 = new Clientes();

include 'includes/footer.php';