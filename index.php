<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


require_once "Config/Autoload.php";
Config\Autoload::run();
Config\Enrutador::run(new Config\Request());
$obj = new Config\Request();

echo "Soy echo controlador: ".$obj->getControlador();
echo "<br>";
echo "Soy echo metodo: ".$obj->getMetodo();
echo "<br>";
echo var_dump($obj->getArgumento())

?>