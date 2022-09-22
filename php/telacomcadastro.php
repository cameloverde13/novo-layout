<?php
session_start();
if (empty($_SESSION['usuario']) && empty($_SESSION['email'])){
    header('location:../caroça/Jovem_Som.html');
}
$cadastro1 = $_SESSION['cad'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela com cadastro</title>
</head>
<script>
    function onClickMenu(){
    document.getElementById("menu").classList.toggle("change");
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu-bg").classList.toggle("change-bg");

}
</script>
<style>
    @charset "UTF_8";
@font-face {
    font-family: 'thehel';
    src: url("../_fonts/THE\ HELMUNTE.otf");
}
    body
     {
        background-image: url("../_imagens/fundo-maior.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        margin: 0 auto;   
        display: flex;
        flex-direction: center;
        justify-content: center;
        align-items: center;
        font-family: 'Pt Sans', sans-serif;
    }
    /*começo botão*/
    
    #menu{
        width: 40px;
        height: 30px;
        margin: 75px 0 20px 20px;
        cursor: pointer;
    }
    .bar{
        height: 5px;
        width: 100%;
        background-color: rgb(255, 255, 255);
        display: block;
        border-radius: 5px;
        transition: 0.3s ease;
    }
    #bar1{
        transform: translateY(-4px);
    }
    #bar3{
        transform: translateY(4px);
    }
    .nav li a
    {
        color: aliceblue;
        text-decoration: none;
    }
    .nav li a:hover
    {
        font-weight: bold;
    }
    .nav li
    {
        list-style: none;
        padding: 9px 0;
    }
    .nav
    {
        padding: 8px;
        margin: 0 10px;
        transition: 0.3s ease;
        display: none;
    }
    .menu-bg, #menu-bar{
        top:0;
        left: -15px;
        position: absolute;
    }
    .menu-bg{
        z-index: 1;
        width: 0;
        height: 0;
        margin: 30px 0 20px 20px;
        background: radial-gradient(circle, rgba(0, 0, 0, 0.26), rgb(0, 0, 0));
        border-radius: 50%;
        transition: 0.3s ease;
    }
    #menu-bar{
        z-index: 2;
    
    }
    .change-bg
    {
        width: 500px;
        height: 500px;
        transform: translate(-60%,-30%);
    }
    .change.bar
    {
        background-color: white;
    }
    .change #bar1{
        transform: translateY(4px) rotateZ(-45deg);
    }
    .change #bar3{
        transform: translateY(-6px) rotate(45deg);
    }
    .change #bar2{
        opacity: 0;
    }
    .change{
        display: block;
    }
    /*final botão*/
    
    /* começo carrossel*/
#slider {
    margin-top: 4cm;
    width: 80%;
    max-width: 750px;
    height: 450px;
    max-height: 650px;
    border-width: 3px;
    border-color: #ffffff;
    border-style: solid;

    position: relative;
}

#slider img{
    opacity: 0;

    position: absolute;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: opacity 800ms;
}

#slider img.selected { 
    opacity: 1;
}
/* fim carrossel*/

/* começo header*/
#form h1{
    margin-top: -12px;
}

header{
    margin: 0px;
    width: 100vh;
    height: 94px;
    background-color: rgba(1, 1, 1, 1);
    padding-top: 10px;
    background-color: rgba(0, 0, 3);
	min-height: 60px;
    position:fixed;
    top:0;
    left: 0;
    width: 100%;
}
div#centerimg{
    text-align: center;
    
}
img#title{
   height: 45px;
   width: 450px;
   padding: 0px;
   margin-block-end: 0px;
}

header h2{
    color: #ffffff;
    font-family: thehel;
    text-align: center;
    margin-top: 0px;
}

nav#menu ul{
    list-style: none;
    text-transform: uppercase;
    position: absolute;
    bottom: -10px;
    right: 4px;
}

nav#menu li{
    display: inline-block;
    padding: 2px;
    border: 1px solid #202020;
    border-bottom: 50px;
    
}

nav#menu a{
    text-decoration: none;
    color: #ffffff;
}

nav#menu a:hover{
    color: #202020;
}
/* fim header*/
</style>
<body>
        <header>
            <div id="centerimg"><img id="title" src="../_imagens/png_logo.png" ></div>
                  <h2>Sonorização de Eventos</h2>

                  <div id="menu-bar">
                    <div id="menu" onclick="onClickMenu()">
                        <div id="bar1" class="bar"></div>
                        <div id="bar2" class="bar"></div>
                        <div id="bar3" class="bar"></div>
                </div>
                <ul class="nav" id="nav">
                    <li> <a href="../caroça/caroça.html"> <u> Página inicial</u></a> </li>
                    <li> <a href="../_html_java/SobreNós.html"><u>Sobre nós</u></a> </li>
                    <li> <a href="../_html_java/eventosRealizados.html"><u>Um pouco dos nossos <br> trabalhos</u></a> </li>
                    <li> <a href="../_html_java/AreaAnuncio.html"><u>Área para o <br> anunciante</u></a> </li>
                    <li> <a href="../_html_java/teladepacotes.html"><u>Solicite seu<br> Orçamento</u></a> </li>
                </ul>
                </div>
                <div class="menu-bg" id="menu-bg"></div>
  
                  <nav id="menu">
                      <ul>
                          
                          <li>
                          <a href="?sair=1">LOGOUT</a>
                          </li>
                      </ul>
                  </nav>
                  
                  
               </header> <br>
    <div id="slider">
        <img class="selected" src="../_imagens/palcoe.jpg">
        <img src="../_imagens/palco.jpg" >
       
    
    <script src="../caroça/carroça.js"></script>

    <?php
$sair = 0;
if (isset($_GET['sair'])) $sair = $_GET['sair'];
if ($sair == 1) {
  session_destroy();
 header('location:../caroça/Jovem_Som.html');
}
?>
</body>
</html>