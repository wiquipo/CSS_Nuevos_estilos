<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","jonas","astrid9","logearse");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <p class="bad" style="color: #162938;">Error en el resultado <br> -Intentalo de nuevo-</p>
    <?php
}