<?php
class Conexao
{
    private static $pdo;

    public static function conectar()
    {
        if (!isset(self::$pdo)) {
            $host = "localhost";
            $dbname = "bdGreenHouse";
            $user = "root";
            $pass = "";

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
?>
