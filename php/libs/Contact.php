<?php
namespace Php\Libs;
use PDO;

class Contact extends Database{
    protected static $db_table="contact";
    protected static $db_fields=array("firstname", "email", "phone", "subject", "messages");

    protected $id;
    protected $firstname;
    protected $email;
    protected $phone;
    protected $subject;
    protected $messages;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setSubject($subject){
        $this->subject=$subject;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
}
?>