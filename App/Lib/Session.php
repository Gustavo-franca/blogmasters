<?php
    
    namespace App\Lib;

    class Session {

        public static function gravarMensagem($mensagem){
            $_SESSION['mensagem'] = $mensagem;
        }
        
        public static function limpaMensagem(){
          unset(  $_SESSION['mensagem']);
        }

        public static function retornaMensagem(){
            return ($_SESSION['mensagem'])?$_SECTION['mensagem']:"";
        }

        public static function gravarForm($form){
            $_SESSION['form'] = $form;
        }

        public static function limpaForm(){
            unset($_SESSION['form']);
        }

        public static function retornaValorForm($key){
            return ($_SECTION['form'][$key])?$_SECTION['form'][$key]:"";
        }
        public static function retornaForm($key){
            return ($_SECTION['form'])?$_SECTION['form']:"";
        }



    }

?>