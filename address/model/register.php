<?php
class Register
{
    public $table="user";
    public $connection;
    public $id;
    public $email;
    public $password;

    public function __construct($connection){
        $this->connection=$connection;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getpassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function add(){
        $sql=$this->connection->prepare("INSERT INTO " . $this->table . " (id,email,password)
                                        VALUES (:id,:email,:password)");
        $result = $sql->execute(array(
            "id" => $this->id,
            "email" => $this->email,
            "password" => $this->password
        ));
        $this->connection = null;

        return $result;
    }
    }



?>