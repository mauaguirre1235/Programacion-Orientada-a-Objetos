<?php include 'includes/header.php';

require 'vendor/autoload.php'; 

// require 'clases/Clientes.php';  
// require 'clases/Detalles.php';  

use App\Clientes;
use App\Detalles;


$detalles = new Detalles();
$clientes = new Clientes(); 


include 'includes/footer.php';