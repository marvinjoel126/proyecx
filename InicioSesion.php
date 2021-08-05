<?php

$dbhost = "sql210.epizy.com";
$dbuser = "epiz_29329237";
$dbpass = "BW01KdQd46";
$dbname = "epiz_29329237_proyecx";

session_start();
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$user = $_POST['nombre'];
$pass = $_POST['pass'];

    $query="SELECT COUNT(*) as contar FROM usuario WHERE nombre='$user' AND pass='$pass'";
    $consulta=mysqli_query($conn,$query);
    $cadena=mysqli_fetch_array($consulta);

    if($cadena['contar'] > 0){
        
$_SESSION['nombre']=$user;
        header("Location: inicio.php");
    }else{
        header("Location: index.html");
    }
}
?>