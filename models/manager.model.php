<?php

require_once "database.php";

class ManagerModel {

    /** Show Managers  */

    static public function mdlShowManagers($table, $item, $valueManager) {

        if ($item != NULL) {

            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valueManager, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }

        $stmt->close();

        $stmt = NULL;

    } 

}
