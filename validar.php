<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

include_once "conexao.php";
$sql = "SELECT * FROM tb_login_lojinho WHERE email = '$usuario' and senha = '$senha'";
$dado = mysqli_query($conexao, $sql);
if($dado->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:index.php");
}else{
    header("location:index.php?msg=invalido");
}

?>