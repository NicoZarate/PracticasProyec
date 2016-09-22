<?php


abstract class PDORepositorio {

    const USERNAME = "root"; 
    const PASSWORD = ""; // 
	const HOST ="localhost";
	const DB = "grupo30";
    
    
    private function getCn(){
        $u=self::USERNAME;
        $p=self::PASSWORD;
        $db=self::DB;
        $host=self::HOST;
        $cn = new PDO("mysql:dbname=$db;host=$host", $u, $p);
        return $cn;
    }
    
    protected function queryList($sql, $args, $mapper){  // Lista ¿?
        $cn = $this->getCn();
        $consulta = $cn->prepare($sql);
        $consulta->execute($args);
        $list = [];
        while($element = $consulta->fetch()){
            $list[] = $mapper($element);
        }
        $cn = null;
        return $list;
    }

    protected function touch($sql,$args) // Modifica la BD
{
    $cn = $this->getCn();
    $consulta = $cn->prepare($sql);
    $consulta->execute($args);
    $cn = null;
}

}

?>