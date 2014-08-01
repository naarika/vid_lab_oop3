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



$obj1 = new User('Ivan Petrov', 'Ivan', 'aloha');
$obj1->showTitle();
echo "<br>".User::INFO_TITLE;
$obj1->showInfo();

