<?php
class User
{
    public $name;
    public $login;
    public $password;
    const INFO_TITLE = 'данные пользователя';

    function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    function __clone (){

        $this->name = "Guest";
        $this->login = "guest";
        $this->password ="qwerty";
    }

    function showInfo(){
        echo("<br/>");
        echo("name  ".$this->name."<br/>");
        echo("login  ".$this->login."<br/>");
        echo("password  ".$this->password."<br/>");

    }

    function showTitle()
    {
        print self::INFO_TITLE;
    }

}

interface  ISuperUser
{
     function getInfo();
}

class  SuperUser extends implements ISuperUser
{

    public $name;
    public $login;
    public $password;
    const INFO_TITLE = 'данные пользователя';
    function getInfo(){
       return array('name'=>$this->name, '$login'=>$this->login, 'password'=>$this->password );
    }

    function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    function __clone (){

        $this->name = "Guest";
        $this->login = "guest";
        $this->password ="qwerty";
    }

    function showInfo(){
        echo("<br/>");
        echo("name  ".$this->name."<br/>");
        echo("login  ".$this->login."<br/>");
        echo("password  ".$this->password."<br/>");

    }

    function showTitle()
    {
        print self::INFO_TITLE;
    }

}


$obj1 = new SuperUser('Ivan Petrov', 'Ivan', 'aloha');
print_r( $obj1->GetInfo());
