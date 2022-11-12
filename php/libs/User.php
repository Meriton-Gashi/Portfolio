<?php

namespace Php\Libs;

use Exception;
use PDO;
use PDOException;

class User extends Database
{
    
    protected static $db_table = "users";
    protected static $db_fields = array("firstname", "lastname", "phone", "photo", "email", "adresa", "experience", "education", "password",);

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $email;
    protected $adresa;
    protected $experience;
    protected $education;
    protected $password;
    
    

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setAdresa($adresa)
    {
        $this->adresa = $adresa;
    }
    public function getAdresa()
    {
        return $this->adresa;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function setEducation($education)
    {
        $this->education = $education;
    }
    public function getEducation()
    {
        return $this->education;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getAllUsers(){
        $this->query = "select * from " . static::$db_table;
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
