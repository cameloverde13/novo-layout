<?php
$link = mysqli_connect("localhost","root","","jovemsom")or die('Erro');
$cadastro1 = "";
if(isset($_GET['cad'])) $cadastro1 = $_GET['cad'];
?>