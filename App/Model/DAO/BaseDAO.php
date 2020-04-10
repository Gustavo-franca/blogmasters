<?php

    namespace App\Models\DAO;

    use App\lib\Conexao;

    abstract class BaseDAO //classe não instansiavel! Classe com funções básicas de acesso ao Banco
    {
        private $connection;
        //nessa classe posso criar implementações padrões como update , insert ,select e delete padrão para aplicação
        public function __construct()
        {
            $this->conexao = Conexao::getConnection();
        }

        public function select($sql){
            if(!empty($sql)){
                return $this->connection->query($sql);
            }
        }

        public function insert($table , $cols, $values){
            if(!empty($table) && !empty($cols) && !empty($values))
            {
                $parametros = $cols;
                $colunas = str_replace(":",":",$cols);// a função utilizada pede que inserimos : para indicar a váriavel 
                //nesse caso presupomos que irá vir com :

                $stmt = $this->connection->prepare("INSERT INTO $table($colunas) values ($parametros)");
                $stmt->execute($values);

                return $stml->rowCount();//retorna o numero de linhas afetas caso retornar 0 pode ter ocorrido um erro;
            }else{
                return false;
            }
        }
    }
?>