<?php 

    namespace App\Controllers;
    use App\Lib\Session;


    abstract Class Controller  //uma classe abstract é uma classe que não pode ser instanciada diretamente, ou seja esse método só podera ser usado por seus filhos
    {
        protected $app; // 
        private $viewVar; // estrutura para acessas futuramente as páginas

        public function __construct($app){
            $this->setViewVar('nameController',$app->getControllerName()); // devo criar a função getController
            if($string = $app->getAction()){
                $this->setViewVar('nameAction',$app->getAction());
            }
        }
        public function render($view){

            $viewVar = $this->getviewVar(); // passa as informações a view para poderem ser usadas
            $Session = Session::class; // possibilita mostrar ou não o menu??
            //paginas mostradas pela view
            require_once PATH .'\\App\\Views\\layouts\\header.php';
            require_once PATH .'\\App\\Views\\layouts\\menu.php';
            require_once PATH ."\\App\\Views\\".$view.".php";
            require_once PATH ."\\App\\Views\\layouts\\footer.php";
        }

        public function redirect($view){
            header('Location : http://'. APP_HOST . $view);
        }
        public function getviewVar(){
            return $this->viewVar;
        }

        public function setViewVar($varName, $varValue){
            if($varName != "" && $varValue != ""){
                   $this->viewVar[$varName] = $varValue;      
            }
        }


    }



?>