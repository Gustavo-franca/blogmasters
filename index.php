<?php

//1- refactor the code to english methods, classes and functions

  use App\App;
  use App\Lib\Error;
  use App\Lib\Validation;


  error_reporting(E_ALL & ~E_NOTICE); // you will not receive warning errors for deprecated methods or functions

  require_once("vendor/autoload.php");  //  composer autoload 
  define('SESSION_LIFE_TIME',604800);// tempo de vida da sessão
  if(session_status() != PHP_SESSION_ACTIVE){
    Validation::my_session_start();
  }
  //verificar se essa seção é antiga //verificar o tempo de requisição se for mais que 5 minutos desconectar 
  //se for recuperar para a seção mais nova //verifiacr se a seção está duplicada em ip diferentes
  Validation::my_session_verify();
  //criar nova seção e salvar a id da seção antiga na variavel de seção
  Validation::my_session_renerate();
  try { // com essa prática todos os erro da aplicação voltaram para aqui caso ocorrer
    $app = new App(); // esta classe é responsavel po comandar toda aplicação utilizando práticas de um framework.
    $app->run();
  }catch(\Exception $e){
    $oError = new Error($e);
    $oError->render(); // envia para a classe erro para mostrar uma página amigavel do Erro ocorrido;
  }





?>