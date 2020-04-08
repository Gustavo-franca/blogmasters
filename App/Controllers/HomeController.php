<?php
    
  
    namespace App\Controllers;
    
    use App\Model\Entidades\Article;
    

    
    class HomeController extends Controller 
    {
        public function index(){

            $articles = $this->mainArticle();

            $this->render('home/index');

        }
        function ranking(){
            include 'view/ranking.php';
        }
        function sobre(){
            include 'view/sobre.php';
        }
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