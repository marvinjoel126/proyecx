<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyec";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
    echo "Conexión Completada ";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuario (nombre, correo, pass) VALUE ('".$nombre."','".$correo."','".$pass1."')";

        

        if(mysqli_query($conn,$sql)){
            header("Location:index.html");
        }else{
            echo "ERROR AL REGISTRARSE";
        }
    }else {
        echo "Verifique las Contraseñas";
    }
}
?>