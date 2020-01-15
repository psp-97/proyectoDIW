<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29/11/19
 * Time: 10:46
 */

class Conexion extends PDO
{

    private $dsn = "mysql:host=momazos.duckdns.org:443;dbname=test";
    private $usuario = "pi";
    private $password = "1234";
    private $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    public function __construct()
    {
        parent::__construct($this->dsn, $this->usuario, $this->password, $this->opciones);
    }

}