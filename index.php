<?php

  use App\App;
  use App\Lib\Erro;
  session_start();

  error_reporting(E_ALL & ~E_NOTICE); // não recebe erros de noticia (como funcões deprecate)

  require_once("vendor/autoload.php"); // autoload do composer

  try { // com essa prática todos os erro da aplicação voltaram para aqui caso ocorrer
    $app = new App(); // esta classe é responsavel po comandar toda aplicação utilizando práticas de um framework.
    $app->run();
  }catch(\Exception $e){
    $oError = new Erro($e);
    $oError->render(); // envia para a classe erro para mostrar uma página amigavel do Erro ocorrido;
  }





?>