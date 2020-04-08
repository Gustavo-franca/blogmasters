<?php

    require 'model/index.php';
    class HomeController 
    {
        function index(){

            
            $model = new Index();

            $articles = $model->mainArticle();

            include 'view/index.php';

        }
        function login(){
            include 'view/login.php';
        }
        function cadastro(){
            include 'view/cadastro.php';
        }
        function ranking(){
            include 'view/ranking.php';
        }
        function sobre(){
            include 'view/sobre.php';
        }

    }

?>