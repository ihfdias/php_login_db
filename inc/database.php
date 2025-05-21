<?php 

class database 
{
    public function query($sql, $params = [])
    {
        try {

            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname='. DB_NAME, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // conexão e comunicação com a bd
            // devovler os resultados 

        } catch (\PDOException $err) {
            
            // devolver o erro
        }
    }
}


?>