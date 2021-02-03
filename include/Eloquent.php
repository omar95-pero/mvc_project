<?php

namespace Eloquent;

class eloquent
{
    public function __construct()
    {
        include 'config/database.php';
        $dsn = 'mysql:dbname=' . $infoDatabase['dbname'] . ';host=127.0.0.1';
        $user = $infoDatabase['dbuser'];
        $password = $infoDatabase['dbpassword'];

        try {
            $dbh = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
