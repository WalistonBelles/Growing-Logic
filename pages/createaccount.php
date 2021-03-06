<?php

/**
 * Project: Growing Logic
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

    <!-- Register -->
    <main class="login-body" data-vide-bg="<?PHP echo $template_path; ?>assets/img/login-bg.mp4">
        <!-- Login Admin -->
        <form class="form-default" action="../controller/createaccount.php" method="POST">
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="index.html"><img src="<?PHP echo $template_path; ?>assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Registrar Conta</h2>

                <div class="form-input">
                    <label for="name">Login</label>
                    <input  type="text" name="login" placeholder="Login">
                </div>
                <div class="form-input">
                    <label for="name">Email Address</label>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <div class="form-input">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="password1" placeholder="Confirm Password">
                </div>
                <div class="form-input">
                    <label for="name">Email</label>
                    <input type="password" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="name">Celular</label>
                    <input type="password" name="celular" placeholder="Celular">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Registration">
                </div>
                <!-- Forget Password -->
                <a href="login.html" class="registration">login</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>
</html>
