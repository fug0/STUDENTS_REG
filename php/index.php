<?php

error_reporting(-1);

require_once __DIR__ . "/Connection/Connection.php";

$table = new Connection;

$dataArr = $table->query('SELECT * FROM pNames', $arr = []);

$result = [];
$namesArrBuf = [];

foreach ($dataArr as $values) {
    $namesArrBuf[] = $values['name'] . '<br>';
}
$result =[
    'name' => $namesArrBuf
];
echo json_encode($result);
