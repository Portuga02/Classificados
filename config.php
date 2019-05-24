<?php
 //Conexão com o banco de dados crud_arq_mvc , utilizando padrão de programação MVC


require 'environment.php';
$config = array();
if (ENVIROMENT == 'development') {
    define("BASE_URL", "http://localhost/Crud_Arq_MVC");
    $config['dbname'] = "crud_arq_mvc";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = ""; // utiizado branco no padrao windows 
} else {
    define("BASE_URL", "http://localhost/Crud_Arq_MVC");
    $config['dbname'] = "crud_arq_mvc";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
}
global $pdo;
try {
    $connDb = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $erro) {
    echo "erro na conexão com o banco de dados" . $erro->getMessage();
    exit;
}
$core = new Core();
$core->run();
 