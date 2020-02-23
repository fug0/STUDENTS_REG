<?php

error_reporting(-1);

require_once __DIR__ . "/Connection/Connection.php";

$table = new Connection;

if (isset($_POST['name'])) {
    $inputname = array(
        'name' => $_POST["name"]
    );
    echo json_encode($inputname);

    //$table->query("INSERT INTO ".$db_table." (name) VALUES ('$_POST['name']')");

}