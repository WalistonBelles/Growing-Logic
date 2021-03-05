<?php

/**
 * Project: MyAAC
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */

require_once('controller/database.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contatos</title>
    </head>
    <body>
        <form action="?act=save" method="POST" name="form1" >
          <h1>Agenda de contatos</h1>
          <hr>
          <input type="hidden" name="id" />
          Nome:
          <input type="text" name="nome" />
          E-mail:
          <input type="text" name="email" />
          Celular:
         <input type="text" name="celular" />
         <input type="submit" value="salvar" />
         <input type="reset" value="Novo" />
         <hr>
       </form>
    </body>
</html>