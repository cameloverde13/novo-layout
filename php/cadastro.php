<?php
//cabeçalho
session_start();
include "conecta.php";

//variaveis
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['confirma'];
// echo "nome $nome";
// echo "cpf $cpf";
// echo "data $data";
// echo "email $email";
// echo "senha $senha";
// echo "csensa $csenha";
// fim variaveis e cabeçalho

// sql para cadastrar usuário
if ($senha == $csenha){


$sql = "INSERT INTO cadastro1(nome,cpf,data,email,senha)VALUES('$nome','$cpf','$data','$email','$senha')";
$r=mysqli_query($link,$sql);
    $campos = array('$nome','$cpf','$data','$email','$senha');
if (mysqli_query($link,$sql)){
    $sql2 = "SELECT * FROM cadastro1 WHERE email = '$email'";
    $_SESSION['cad']=mysqli_query($link,$sql2)->fetch_array(MYSQLI_ASSOC)['id'];
    $_SESSION['usuario'] = $nome;
    $_SESSION['email']= $email;
}else{
    echo "erro";
}
    header("location:../caroça/Jovem_Som.html");
}
else {
    echo"senha e confirmar senha não coincide";
}
?>