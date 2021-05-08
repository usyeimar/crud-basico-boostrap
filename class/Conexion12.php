<?php


class Conexion
{
    private $host;
    private $user;
    private $password;
    private $db;

    public function __construct($host = 'localhost', $user = 'root', $password = '', $db = 'login')
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function EstablecerConexion() //Metodo conexion
    {
        $Conexion = new mysqli($this->host, $this->user, $this->password, $this->db);
        error_reporting(0);
        if ($Conexion->connect_errno) {
            echo "No se pudo establecer la conexion";
        }
        return $Conexion;
    }

    public function __destruct()
    {
        mysqli_close($this->EstablecerConexion());
    }
}
