<?php

require_once "conexao.php";
require_once "geralog.php";

class SocioDAO {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new SocioDAO();

        return self::$instance;
    }

    public function Inserir(Socio $socio) {
        try {
            $sql = "INSERT INTO socio (nome, id_clube) VALUES (:nome, :id)";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $socio->getNome());
            $p_sql->bindValue(":id", $socio->getCod_clube());

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
            $sql = "DELETE FROM socio WHERE id = :cod";
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

    public function ShowClube() {
        try {
            $sql = "SELECT * FROM time";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
             while ($row = $p_sql->fetchAll(PDO::FETCH_ASSOC))  {
                return $row;
            }
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
    }
    
        public function ListarSocio() {
        try {
            $sql = "SELECT * FROM socio";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            while ($row = $p_sql->fetchAll(PDO::FETCH_ASSOC))  {
                return $row;
            }
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
    }
}

?>