<?php 

require_once("config.php");

$sql = new Sql();

$ususarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($ususarios);

 ?>