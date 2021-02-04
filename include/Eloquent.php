<?php


namespace Eloquent;

use Errors\Error;

class eloquent
{
    public function __construct()
    {
        include 'config/database.php';
        $dsn = 'mysql:dbname=' . $infoDatabase['dbname'] . ';host=127.0.0.1';
        $user = $infoDatabase['dbuser'];
        $password = $infoDatabase['dbpassword'];
        if (!empty($infoDatabase['dbname']) && !empty($infoDatabase['dbuser'])) {
            try {
                $dbh = new \PDO($dsn, $user, $password);
                echo '<center><h1>Success Connection With DataBase......</h1></center>';
            } catch (\PDOException $e) {

                // echo '<center><h1>Connection failed: ' . $e->getMessage() . '</h1></center>';
                new Error($e->getMessage());
            }
        }
    }
}
