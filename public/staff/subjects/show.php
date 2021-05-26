<?php

//$id = isset($_GET['1']) ? $_GET['id'] : '2';

$id = $_GET['id'] ?? '1'; // PHP > 7.0

echo $id;

 ?>
