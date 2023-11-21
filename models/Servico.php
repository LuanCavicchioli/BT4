<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/alerta.php";

class Servico
{

    protected $db;
    protected $table = "servico";

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }

    public function cadastrar($dados)
    {
        try {
            $sql = "INSERT INTO {$this->table} (dia, hora, informacoes, valor)
            VALUES (:dia, :hora, :informacoes, :valor)";
            $stmt = $this->db->prepare($sql);

            
            $stmt->bindParam(':dia', $dados['dia']);
            $stmt->bindParam(':hora', $dados['hora']);
            $stmt->bindParam(':informacoes', $dados['informacoes']);
            $stmt->bindParam(':valor', $dados['valor']);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "Erro Ao Cadastrar: " . $e->getMessage();
            return false;
        }
    }

    public function listarServico()
    {
        try {
            $query = "SELECT * FROM {$this->table}";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Erro na listagem: ' . $e->getMessage();
            return null;
        }
    }
}
?>