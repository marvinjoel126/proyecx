<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyec";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM registro WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:inicio.php");
}else {
    echo "Hay un error en los datos: ".mysqli_error($conn);
}

?>