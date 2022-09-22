
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../_css/cadastrar.css" />
    <script src="cpf.js"></script>
</head>

<body>
    <form action="../php/cadastro.php" method="post">
    <div id="form" name="form">
        <br method="post" action="cadastro.php">
        <p class="text">Nome completo:</p>
        <input type="text" placeholder="Apenas letras" name="nome" >
        <p class="text">CPF/CNPJ:</p>
        <input type="text"  name="cpf" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()'
            autocomplete="off" maxlength="18" >
        <p class="text">Data de Nascimento:</p>
        <input type="date" name="data">
        <p class="text">E-mail:</p>
        <input type="email" name="email" placeholder="exemplo@exemplo.com" required autocomplete="off">
        <p class="text">Senha:</p>
        <input type="password" name="senha"  required>
        <p class="text">Confirmar senha:</p>
        <input type="password" name="confirma" >
        <p><input type="submit" value="enviar" style="margin-top: 13px; margin-left: 15px; margin-right: 15px;"  /></p>
        </form>
        <p><a href="../caroça/Jovem_Som.html"><input type="submit" value="voltar"
                    style="margin-top: 13px; margin-left: 15px; margin-right: 15px;" /></a></p>
        
    </div>

</body>

</html>