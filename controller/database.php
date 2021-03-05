<?php
/**
 * Project: MyAAC
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */

require_once('config.php');

try {
    $conn = new PDO('mysql:host='.$config['database_host'].'; dbname='.$config['database_name'].'', $config['database_user'], $config['database_password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}