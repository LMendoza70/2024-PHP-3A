<?php
$user="valor";
$password="valor"
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        if(!empty($_POST['nombre'])){
            $name=$_POST['nombre'];
        }else{
            $name="requerido";
        }
        $email=!empty($_POST['email']) ? $_POST['email'] : "requerido";
        $mensaje = !empty($_POST['mensaje']) ? $_POST['mensaje'] : "requerido";

        if($name=="requerido" || $email=="requerido" || $mensaje=="requerido"){
            echo "Algunos campos son requeridos verifique su formulario";
        }else{
            echo "Ok :". htmlspecialchars($name)."<br>";
            echo "Te enviaremos un correo a :". htmlspecialchars($email) ."<br>";
        }
    }

    // Caracateristicas de PHP
    // private int x=0; C#
    // var x=0 js //manejamos un tipado dinamico x="hola" x es string
    //en php la declaracion de variables $x = 0; numerico 
    //tipos de datos en php "string" int float bool tipos de datos escalares
    //tipos de datos compuestos array, object 
    //tipo de dato especial null
    //operadores en php aritmeticos +-*/%
    //operadores logicos && || !
    //operadores relacionales ==, !=, >,<,>=,<=
    // $_  ///instruccion mas basica de phpt echo
?>