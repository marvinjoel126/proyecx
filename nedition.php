<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyec";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $_POST['total'];

$sql="UPDATE registro SET producto='$producto' , cantidad='$cantidad' , precio='$precio' , total='$total' WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:inicio.php");
}else {
    echo "Tienes un fallo al actulizar los datos del producto: ".mysqli_error($conn);
}

?>