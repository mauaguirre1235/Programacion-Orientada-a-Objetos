<?php include 'includes/header.php';


require 'vendor/autoload.php'; 
// require 'clases/Clientes.php';  
// require 'clases/Detalles.php';  

use App\Clientes;
use App\Detalles;
use Firebase\JWT\JWT;



$detalles = new Detalles();
$clientes = new Clientes(); 


include 'includes/footer.php';