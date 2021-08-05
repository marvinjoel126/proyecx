<?php
$dbhost = "sql210.epizy.com";
$dbuser = "epiz_29329237";
$dbpass = "BW01KdQd46";
$dbname = "epiz_29329237_proyecx";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM registro WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:inicio.php");
}else {
    echo "Hay un error en los datos: ".mysqli_error($conn);
}

?>