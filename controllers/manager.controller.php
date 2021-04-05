<?php

class ManagerController {

    /** Login Manager */

    public function ctrLoginManager() {

        if (isset($_POST["logEmail"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["logEmail"]) &&
                    preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/', $_POST["logPassword"])) {

                // The hash of the password that
                // can be stored in the database
                # $hash = crypt($_POST["logPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $table = "managers";
                $item = "manager_email";
                $valueManager = $_POST["logEmail"];

                $response = ManagerModel::mdlShowManagers($table, $item, $valueManager);

                if ($response["manager_email"] == $_POST["logEmail"] && $response["password"] == $_POST["logPassword"]) {

                    $_SESSION["validateSessionBackend"] = "ok";
                    $_SESSION["id"] = $response["id"];
                    $_SESSION["manager_name"] = $response["manager_name"];
                    $_SESSION["manager_email"] = $response["manager_email"];
                    $_SESSION["password"] = $response["password"];
                    $_SESSION["picture"] = $response["picture"];
                    $_SESSION["profile"] = $response["profile"];

                    echo '<script>

							window.location = "index.php?route=home";

						</script>';
                    
                } else {
                    echo '<br>
					<div class="alert alert-danger">Error al ingresar vuelva a intentarlo</div>';
                } 
            }        
        }

    }

}