<?php
    namespace App;

    use App\Controllers\HomeController;


    class App
    {
        private $controller;
        private $controllerFile;
        private $action;
        private $params;
        private $controllerName;

        public function __contruct(){
            /*
            * Constantes Da aplicação
            */

            define('APP_HOST'       ,$_SERVER['HTTP_HOST']."/homepage"); // link para inicialização da página
            define('PATH'       ,    realpath('./')); // gerenciar Diretórios internos da aplicação
            define('TITLE'          ,"BlogMasters"); // utilização na view
            define('DB_HOST'        ,"localhost");//Configurações de banco - HOst
            define('DB_USER'        ,"root");//user
            define('DB_PASSWORD'    ,"");//password
            define('DB_NAME'        ,"blogmasters");//o banco
            define('DB_DRIVER'      ,"mysql"); // o SGBD

            $this->url(); //puxa a url atual
            
        }

        public function url(){ // trabalha todo o tratamento da url para a aplicação

            if(isset($_GET['url'])){
               $path = $_GET['url'];
               $path = rtrim($path, '/'); // retira espaçoes em branco e o ultimo / da url

               $path = explode('/', $path); // tranforma em um array (delimitador, String)

               $this->controller = $this->verificaArray($path, 0);
               $this->action = $this->verificaArray($path, 1);

               if($this->verificaArray($path,2)){
                unset($path[0]);   
                unset($path[1]);// retira os dados  controller a ação   
                $this->params = array_values($path); // adicioan os n parametros a  váriavel
               }
            }
        }
        public function verificaArray($array, $key){
            if(isset($array[$key])&& !empty($array[$key])){
                return $array[$key];
            }
            return null;
        }

        public function run(){
            if($this->controller){//verica se o controller existe
                $this->controllerName = ucwords($this->controller).'Controller'; // ucwords deixa a primeira lista maiscula
                $this->controllerName = preg_replace('/[^a-zA-Z]/i','',$this->controllerName); // subtitue alguns carracteres do nome de acordo com a expressão regular
            }else{
                $this->controllerName = "HomeController"; //pagina padrão
            }

            $this->controllerFile =$this->controllerName . ".php";
            $this->action = preg_replace('/[^a-zA-Z]/i','',$this->action);

            if(!$this->controller){
                $this->controller = new HomeController($this);
                $this->controller->index();
            }

            if(!file_exists(PATH . '/App/Controllers/' .$this->controllerFile)){
                throw new Exception("Página não encontrada.",404);
            }

            $nomeClasse = "\\App\\Controllers\\".$this->controllerName; //garente que está classe estara no diretório Controller da aplicação
            $objetoController = new $nomeClasse($this);

            if(!class_exists($nomeClasse)){
                throw new Exception("Erro na aplicação",500);
            }


            if(method_exists($objetoController,$this->action)){ // verifica se o método existe
                $objetoController->{$this->action}($this->params); // chama a action e envia os parametros para a classe controller
                return;
            }else if(!$this->action && method_exists($objetoController,'index')){ // caso não houver uma action ele irá chamar a action index e irá inserior os params para o index
                $objetoController->index($this->params); // se for levar em conta não terá como os parametros chegarem até aqui pois serão considerado uma action
                return;
            }else{
                throw new Exception("Nosso suporte já esta verificando, Desculpe",500);
            }
            throw new Exception("Nenhuma página foi encontrada",404);


        }

        

    }


?>