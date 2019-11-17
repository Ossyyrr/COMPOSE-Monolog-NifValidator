<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use NifValidator\NifValidator;


// add records to the log

$nombre = $_POST['Nombre'];
$contra = $_POST['Contra'];
$dni = $_POST['dni'];

$log = new Logger('Login');
// create a log channel
$log->pushHandler(new StreamHandler('registro.log', Logger::WARNING));


if ($nombre == 'Admin' && $contra == '1234'){
    $log->info('Correcto');
    $datosCorrectos = 'Usuario y contraseña correctos <br/>';
    if((NifValidator::isValid($dni))){
        $log->info('DNI: '.$dni);
        $dniCorrecto= 'DNI Válido';
    }else{
        $dniIncorrecto = "DNI incorrecto";
        $log->error('DNI invalido: '.$dni);
    }
}else{
    $log->error('Se ha intentado acceder con unas credenciales incorrectas:'.$nombre." ".$contra . " " .$dni);
    $datosIncorrectos ='Introduce datos correctos';
}
include('index.html');
