<?php
class Controller extends controller{
    public $connection;
public function __construct($connection)
{
    $this->connection=$connection;
    
}
function index(){
    $this->view->render('signup.php');
}
function signup(){
    $id=$_POST['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}

}
?>