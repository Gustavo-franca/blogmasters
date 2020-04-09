<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="UTF-8">
            <title>Blog Masters: Mostrando o melhor para você!</title>
            <link rel="stylesheet" href="<?php echo 'http://'.APP_HOST?>Public/css/style.css">
            <?php
            if(isset($viewVar['nameAction']) ){
                echo '<link rel="stylesheet" href="';
                echo 'http://'. APP_HOST .'Public/css/'.$viewVar['nameAction'].'.css">';
            }
           ?>
    </head>
    <body class="background-default">