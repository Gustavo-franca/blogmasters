<?php
    
    namespace App\Lib;
    
    use exception;

    
    class Erro
    {
        private $mensage;
        private $code;

        public function __contruct($objetoExeption = Exception::class){ // inicializa a classe Exception nativa do PHP
            $this->code = $objetoExeption->getCode(); // armazena os dados da exeção na váriavel da classe
            $this->message = $objetoExeption->getMessage();
        }

        public function render(){
            $varMessage = $this->message;

            if(file_exists(PATH . "/App/Views/error/".$this->code.".php")){ // verifica se existe uma View com o nome do codigo do Erro
                require_once PATH . "/App/Views/error/". $this->code.".php";
            }else{
                require_once PATH . "/App/Views/error/500.php"; // Página padrão para erros diferentes do Comum;
            }
            exit;
        }
    }

?>