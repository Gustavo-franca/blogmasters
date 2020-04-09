<?php
    
    namespace App\Lib;

    class Sessao {

        public static function gravaMensagem($mensagem){
            $_SECTION['mensagem'] = $mensagem;
        }
        
        public static function limpaMensagem(){
          unset(  $_SECTION['mensagem']);
        }

        public static function retornaMensagem(){
            return ($_SECTION['mensagem'])?$_SECTION['mensagem']:"";
        }

        public static function gravarForm($form){
            $_SECTION['form'] = $form;
        }

        public static function limpaForm(){
            unset($_SECTION['form']);
        }

        public static function retornaValorForm($key){
            return ($_SECTION['form'][$key])?$_SECTION['form'][$key]:"";
        }
        public static function retornaForm($key){
            return ($_SECTION['form'])?$_SECTION['form']:"";
        }



    }

?>