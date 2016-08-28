<?php

require_once "conexao.php";
require_once "geralog.php";

class ClubeDAO {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ClubeDAO();

        return self::$instance;
    }

    public function Inserir(Clube $clube) {
        try {
            $sql = "INSERT INTO time (nome) VALUES (:nome)";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $clube->getNome());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . 
$e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public function Deletar($cod) {
            try {
                $sql = "DELETE FROM time WHERE id = :cod";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":cod", $cod);

                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, foi gerado
    um LOG do mesmo, tente novamente mais tarde.";
                GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
    getCode() . " Mensagem: " . $e->getMessage());
            }
        }

}

?>