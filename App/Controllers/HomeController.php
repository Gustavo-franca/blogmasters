<?php
    
  
    namespace App\Controllers;
    
    use App\Model\Entidades\Article;
    

    
    class HomeController extends Controller 
    {
        public function index(){

            $this->setViewVar('nameArticles',$this->mainArticle());

            $this->render('home/index');

        }
        //essa função realmente seria aqui? a implementação da regras não! ela deve solicitar a outra classe! mas qual classe?
        function mainArticle(){
            // esse houver diversos articles cadastrados como principais
            //como será definido um articlo como principal
            for($i = 0; $i < 5;$i++){
             $article = new Article();
             $mainArticles[ ] = $article->fullarticle();
            }
         
            return  $mainArticles;
         }

    }

?>