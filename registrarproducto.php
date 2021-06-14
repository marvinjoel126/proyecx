<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyec";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
   

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $_POST['total'];
   
        $sql = "INSERT INTO registro (producto, cantidad, precio,total) VALUE ('".$producto."','".$cantidad."','".$precio."','".$total."')";
        if(mysqli_query($conn,$sql)){
            header("Location:inicio.php");
        }else{
            echo "ERROR AL REGISTRARSE";
        }
    
}
?>