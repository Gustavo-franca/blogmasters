<?php

   $userName = $_POST['userName'];
   $userPass = $_POST['userPass'];

        //Chamar Classe  que Valida o acesso

   if($userName == "Gustavo" && $userPass == "senha" ){
   
       echo "login efetuado com Sucesso";
     //  header('Location: /Projetos/blogmasters/index.html');
   }else{
       echo "Algum Dado Inválido";
      // header('Location: /Projetos/blogmasters/paginas/login.html');
   }


?>