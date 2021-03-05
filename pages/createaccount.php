<?php

/**
 * Project: MyAAC
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */
?>
<html>
    <head>
        <title> Cadastro de Usuário </title>
    </head>
    <body>
        <form method="POST" action="../controller/createaccount.php">
            <label>Login:</label><input type="text" name="login" id="login"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
            <label>Email:</label><input type="text" name="email" id="email"><br>
            <label>Celular:</label><input type="text" name="celular" id="celular"><br>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>
    </body>
</html>