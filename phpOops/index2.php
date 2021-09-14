<?php 

class Student {
    // public $name,$age;
    // private $name, $age;
    protected $name,$age;

//public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class

function __construct($functional)
{
    echo "<br> this is constructor class caling from ".$functional. "function";
}

function getData($name1,$age1){

    $this->name = $name1;
    $this->age = $age1;
}
function display(){
    echo "<br>Hello ".$this->name.", your age is: ".$this->age."<br>";

}
}


class Teacher extends Student{

    function displayTeacher(){

        echo "<br>Hello " . $this->name . ", your age is: " . $this->age."<br>";
    
    }

}


class Principal extends Teacher{

    function displayPrincipal(){

        echo "<br>Hello " . $this->name . ", your age is: " . $this->age;
    } 

}



abstract class vehicle{

    abstract public function sayhello();

    public function hello2()
    {
        echo "hello2 function without abstraction <br>";
    }

}



// $sp = new vehicle();
// $sp->hello2();
// $sp->sayhello();


//we can not cretaed objects from abtsract class
//below will throw the error , thsta why we'll comment that
//$speak = new Speak();

// to access the data from abstract class, create the child class and inherit the class, then access the data


class SpeakNow extends vehicle
{

    //you must define the same function which was abstract function in parent class
    public function sayhello()
    {
        echo "hello, this is abstract function accessed via child class <br><br>";
    }
}
$sp = new SpeakNow();
$sp->hello2();
$sp->sayhello();



$myStudents = new student('Main Parent');
$myStudents->getData('deepak',28);
$myStudents->display();


$myTeacher = new Teacher('Teacher Inheriting Student');
$myTeacher->getData('dpk',30);
$myTeacher->displayTeacher();


$myPrincipal = new Principal('Principal Inheriting Teacher');
$myPrincipal->getData('devil', 34);
$myPrincipal->displayPrincipal();



class car{

    public function start()
    {
        echo "<br><br>Car Started";
    }

    function acccessParent(){
        self::start();
    }


}


class sportsCar extends car{

    public function start()
    {
        echo "<br><br>Car Started with self start";
    }


    public function checkParent(){
    
        parent::acccessParent();
    }


}



$mycar = new sportsCar();
$mycar->start(); 
$mycar->checkParent();




// static methods and properties can be accessed without object creation


class mainStatic
{

    public static $names="<br><br>deepak, this is the static property<br>";

    # create static function and access it without object
    public static function myStatic()
    {
        echo "<br><br>this is static function and can be accessed without creating objects<br>";
    }
}

echo mainStatic::$names;
mainStatic::myStatic();



// in php, multiple inheritene is not supported, thus we can make use of traits which servers the same purpose as class


class programmer {

    public function html(){
        echo "<br><br>Programmer should know basic Html <br>";
    
    }

    public function css()
    {
        echo "<br><br>Programmer should know basic CSS <br>";
    }


    public function dataStructure()
    {
        echo "<br><br>Programmer should know basic data structure and algorithms <br>";
    }

    public function db()
    {
        echo "<br><br>Programmer should know basic database management <br>";
    }
}


trait frontend{

    public function html()
    {
        echo "<br><br>One should know basic Html <br>";
    }

    public function css()
    {
        echo "<br><br>One should know basic Css <br>";
    }


    public function angular()
    {
        echo "<br><br>One should know basic framworks like anguar, react etc. <br>";
    }

}


trait backend{

    public function php()
    {
        echo "<br><br>one should know backend language like php <br>";
    }


    public function python()
    {
        echo "<br><br>one should python <br>";
    }


}



trait dbms{
    public function db()
    {
        echo "<br><br>One should know dbms <br>";
    }


}



class developer extends programmer{

use frontend,backend,dbms;


}

$development = new developer();

$development->html();
$development->css();
$development->db();
$development->python();
$development->php();
$development->angular();


?>