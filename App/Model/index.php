<?php

    require 'model/Article.php';
    class Index
    {
        function mainArticle(){
           // esse houver diversos articles cadastrados como principais
           //como será definido um articlo como principal
           for($i = 0; $i < 5;$i++){
            $Article = new Article();
            $mainArticles[ ] = $Article->fullarticle();
           }
        
           return  $mainArticles;
        }
    }

?>