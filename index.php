<?php

  require 'controller/HomeController.php';

  $controller = new HomeController();
  $pagina = isset($_GET['pagina'])?$_GET['pagina']: 'index';


  switch($pagina){
    case 'index':
      $controller->index();
    break;
    case 'login':
      $controller->login();
    break;
    case 'cadastro':
      $controller->cadastro();
    break;
    case 'ranking':
      $controller->ranking();
    break;
    case 'sobre':
      $controller->sobre();
    break;
    default:
      echo "página não encontrada";
  }


?>