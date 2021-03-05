<?php

/**
 * Project: MyAAC
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */

require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = (isset($_POST["login"]) && $_POST["login"] != null) ? $_POST["login"] : "";
    $senha = (isset($_POST["senha"]) && $_POST["senha"] != null) ? $_POST["senha"] : "";
    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $login
    $login = NULL;
    $senha = NULL;
    $email = NULL;
    $celular = NULL;
}

if(!empty($login)){
    try {
        if(empty($senha))
            $error = 'Campo de senha não pode ser vazio.';
        if(empty($error) && empty($email))
            $error = 'Campo de email não pode ser vazio.';
        if(empty($error) && empty($celular))
            $error = 'Campo de celular não pode ser vazio.';
        if (empty($error)){
            $stmt = $conn->prepare("SELECT login FROM usuario WHERE login = '". $login ."'");
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    echo "Já existe 1 usuário com esse login!";
                }
                else {
                    $stmt = $conn->prepare("INSERT INTO usuario (id, login, password, email, phone) VALUES (null, ?, ?, ?, ?)");
                    $stmt->bindParam(1, $login);
                    $stmt->bindParam(2, $senha);
                    $stmt->bindParam(3, $email);
                    $stmt->bindParam(4, $celular);
                    if ($stmt->execute()) {
                        if ($stmt->rowCount() > 0) {
                            echo "Dados cadastrados com sucesso!";
                            $login = null;
                            $senha = null;
                            $email = null;
                            $celular = null;
                        } else {
                            echo "Erro ao tentar efetivar cadastro";
                        }
                    } else {
                        throw new PDOException("Erro: Não foi possível executar a declaração sql");
                    }
                }
            } 
        }
        else {
            echo $error;
        }
    }
    catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
} else
    echo 'Campo de login não pode ser vazio';
?>
