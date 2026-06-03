<?php

class Dbh {
    static private ?PDO $db = null;

    static private string $host = "localhost";
    static private string $database = "orangefit_db";
    static private string $username = "root";
    static private string $password = "root_password";

    public static function getConnection(): PDO {
        if (self::$db === null) {
            try {
                self::$db = new PDO("mysql:host=".self::$host.";dbname=".self::$database, self::$username, self::$password);

                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Oops, algo deu errado. Tente novamente.";
                die();
            }

        }
        
        return self::$db;
    }
}