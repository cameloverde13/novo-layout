<?php
session_start();
include "conecta.php";


$email = "";
$senha = "";
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['senha'])) $senha = $_POST['senha'];


$sql = "SELECT * FROM cadastro1 WHERE email = '$email' AND senha='$senha'";

if(empty($email) || empty($senha)):
  echo "Preencha todos os campos";
  exit;
endif;
//logica
$result = mysqli_query($link, $sql);

if ($result->num_rows > 0 ) {
  echo "ok";
  $_SESSION['email'] =  $email;
  $data = mysqli_fetch_row($result);
 
  if(!empty($data)){
    $_SESSION['cad'] = $data[0];
    $_SESSION['usuario'] =  $data[1];
  } 
  header("location:../php/telacomcadastro.php");
  
 
} 
else {
    echo "email ou senha incorretos";
   
}

?>