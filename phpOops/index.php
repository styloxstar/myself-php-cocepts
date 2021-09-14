<?php 

# public-accessible to all, private - only accessible to parent class, protected- accessible to parent and child class where we have to create function and call that protected method it using $this

#inheritance can be done via extends, having said that php does not support multiple inheritance

# abstract class at least have one abstract function 

class construct{
        #constructor - will be called every time the page reloads or called an display information in it
     function __construct($name){
        echo "<hr> welcome". $name ." to php oops programming <br><hr>";
    }
}



class basic{

    #declaring variables
    public $name, $age;

    protected function add($n1, $n2){
        $t = $n1+$n2;
        echo "<hr>addition of no would be: ". $t;
    }

    #set the value to declared variables
    public function identity($n,$a){
        #using $this->variable we can set the data passed via parameter in function

        $this->name = $n;
        $this->age = $a;
    }


    #once the value is set, we can display variables with set values
    public function displayIdentity(){
        echo "hello ".$this->name." you are".$this->age." years old!!! <hr><br>";
    }


    # create static function and access it without object
    public static function myStatic(){
            echo "<hr>this is static function and can be accessed without creating objects<br>";
    }


    
}

class childBasic extends basic{
   public function check($n1,$n2){
       $this->add($n1,$n2);
   }
}

#below is the example of multi-level inheritanse where i inherited the class from another child class, and that child class inheritated fro another class

class grandchild extends childBasic{
    public function gCheck($n1, $n2){
        $this->check($n1, $n2);

    }

    
}



abstract class myAbstract{
    #its very important to have at least one abstract function when we have abstract class, other wise object will not be initialized 
    abstract public function tester();

    public function describe(){
        echo "<hr><br>abstraction is used to in order to hide the complexity from user <br> ";
    }
}


#we can not get direct access of abstract class, thus we can to create public class class inheriting parent class

    class childAbstract extends myAbstract{
        public function tester(){
                echo "<hr>abstract test";

                $this->describe();
        }

        
    }



#method overriding - same function thus overrides the previous function by latest one, in php child class has the priority
#method overloading:- same function but with different parameters but PHP does not supports method overloading


class pOverride{
    function test(){
        echo "<hr><br>parents class running";
    }

    function myParent(){
        echo "<hr><br>will exceute parent class using parent method";
    }
}


class cOverride extends pOverride{
    function test(){
        echo "<hr><br>child class running";
    }  


    #to execute parents methods, use parent::parentclass

    function myChild(){
        parent::myParent();
    }


}


# as discussed before, PHP don't support multiple inheritanse, but to achieve that we can make use of traits
# traits are class like structure containing properties and function and that traits can be shared in any class achieving multiple inheritanse


class frontEnd{
    public function html(){
        echo "<hr><br>used to create structure of webpage";
    }

    public function css(){
        echo "<hr><br>uses to design the structural pages";
    }
}


trait backEnd{
    public function backEnds(){
        echo "<hr><br>used to create logical and meaningful code to solve many problems and create ";
    }

    #after creating objects and calling every method, we;ll realise that below css() method is common in main class in this trait, but trai has more priority than class and thus method in trait will be executed

    
    public function css(){
        echo "<hr><br>used to design html pages";
    }
}


trait db{
    public function db(){
        echo "<hr><br>it is used to create, manipulate and regulate data in or out from database";
    }

}


#now we'll create child class extending main class and we'll also use traits and their properties


class fullStack extends frontEnd{
    # we can use the traits via use method;
    use backend, db;
}





# we can directly call and pass data to class to run in constructor like below
    $construct = new construct('deepak');


# we can create objects like below method
$basic = new basic();
$basic->identity('deepak',27);
$basic->displayIdentity();


# we can also access static function without object like below className:static function
basic::myStatic();


$childBasic = new childBasic();
$childBasic->check(12,22);

#below is multi-level inheritance
$grandChild = new grandchild();
$grandChild->gCheck(22, 28);

#when we'll try to create object or initiate then we'll have the errors thus we'll comment below code
# $myAbstract = new myAbstract();
# $myAbstract->describe();

#and thus, after creating child class accessing abstract class will create object for that child class
$childAbsract = new childAbstract();
$childAbsract->tester();


#overriding object initialization

$overrider = new cOverride();
$overrider->test();
#now we will call the parent class, though it is overrided

$overrider->myChild();



#now we'll create objects for traits

$fullStack = new fullStack();
$fullStack->html();
$fullStack->css();
$fullStack->backEnds();
$fullStack->db();

?>