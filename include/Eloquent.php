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
            if ($infoDatabase['FETCH_TYPE'] == 'ASSOC') {
                $fetch = \PDO::FETCH_ASSOC;
            } elseif ($infoDatabase['FETCH_TYPE'] == 'object') {
                $fetch = \PDO::FETCH_OBJ;
            } else {
                $fetch = \PDO::FETCH_OBJ;
            }
            try {
                $dbh = new \PDO($dsn, $user, $password, [\PDO::ATTR_DEFAULT_FETCH_MODE, $fetch]);
                echo '<center><h1>Success Connection With DataBase......</h1></center>';
                // var_dump($dbh);
            } catch (\PDOException $e) {

                // echo '<center><h1>Connection failed: ' . $e->getMessage() . '</h1></center>';
                new Error($e->getMessage());
            }
        }
    }
}
