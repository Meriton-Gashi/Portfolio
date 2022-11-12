<?php
namespace Php\Libs;
use PDO,PDOException;
use ReflectionClass;

abstract class Database{
    protected static $db_table;
    protected static $db_fields;
    private $host='localhost';
    private $user='root';
    private $pass='';
    private $dbname='portofolio';

    public function __construct(){
        $this->connectDB();
    }
    private function connectDB(){
        try{
            $dsn="mysql:host=". $this->host.";dbname=" . $this->dbname;
            $pdo=new PDO($dsn,$this->user,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo "Lidhja me DB deshtoi " . $e->getMessage();
        }
    }
    public function prepare($sql){
        return $this->connectDB()->prepare($sql);
    }

    public function properties(){
        $properties=array();
        foreach(static::$db_fields as $db_field){
            if(property_exists($this,$db_field)){
                $properties[$db_field]=$this->$db_field;
            }
        }
        return $properties;
    }
    public function getClassName(){
        $className=new ReflectionClass($this);
        return $className->getShortName();
    }
    public function find_all(){
        $sql = "SELECT * FROM " .  static::$db_table;
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    public function find_id($id){
        $this->id=$id;
        $sql = "SELECT * FROM ". static::$db_table;
        $sql .=" WHERE id=:id";
        $result = $this->prepare($sql);
        $result->bindParam(':id',$this->id);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
        return $result->fetch();
    }
    public function create(){
        $properties=$this->properties();
        try{
            $sql="INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
            $sql.="VALUES('" . implode("','",array_values($properties)) . "')";
            $res=$this->prepare($sql);
            $res->execute();
            return true;
            //echo $this->getClassName() . " added succesfully";
        }catch(PDOException $e){
            echo "Error in user registration process" . $e->getMessage();
        }
    }

}
?>