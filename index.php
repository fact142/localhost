<?php
require_once('D:\openserver\domains\localhost\DBConnecter.php');
$conn = new DBConnecter();
$coon::read();
    class Student{
        public $name;
        public $login;
        public $password;
        public $department;

        function eol(){
            echo "<br>\n";
        }

        function ShowInfo($word){
            echo "{$this->name} - \"$word\"";
            $this->eol();
            echo "{$this->login}";
            $this->eol();
            echo "{$this->password}";
            $this->eol();
            echo "{$this->department}";
            $this->eol();
        }

}

    $user1 = new Student(); //создание экземпляров
    $user2 = new Student();
    $user3 = new Student();
    $user4 = new Student();

    $user1->name = "Rustam"; // присвоение свойств экземплярам
    $user1->login = "RBurnashev";
    $user1->password = "gchrYd5w";
    $user1->department = "ИВМиИТ";
    $user1->ShowInfo("Kazan Federal University"); // вызов метода экземпляра

    $user2->name = "Rinat"; // присвоение свойств экземплярам
    $user2->login = "TRinat";
    $user2->password = "hjhu8w";
    $user2->department = "ИВМиИТ";
    $user2->ShowInfo("Kazan Federal University"); // вызов метода экземпляра

    $user3->name = "Ivan"; // присвоение свойств экземплярам
    $user3->login = "GIvan";
    $user3->password = "hjk7w";
    $user3->department = "Information Technologies";
    $user3->ShowInfo("MIT"); // вызов метода экземпляра

    $user4->name = "Ivan"; // присвоение свойств экземплярам
    $user4->login = "GIvan";
    $user4->password = "hjk7w";
    $user4->department = "Information Technologies";
    $user4->ShowInfo("MIT"); // вызов метода экземпляра
?> 