<?php
    define('Servidor', 'localhost:3306');
    define('Usuario', 'root');
    define('Password', '1234');
    define('BD', 'sistemadv');

    $servidor = "mysql:dbname=".BD.";host=".Servidor;
    try{
        //$pdo = new PDO($servidor,username: Usuario,password: Password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>""));
        $pdo = new PDO( 
            $servidor, 
            Usuario, 
            Password, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
        );
        echo "Conexión exitosa";
    }catch(PDOException $e){
        echo "Conexión fallida";
    }
?>