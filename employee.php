<?php 
require_once "company.php";
require_once 'office.php';
 abstract class Employee implements Company{

    //create attribute
    private $name;
    private $salary;
    private $department;
    

    function __construct($name,$department, $salary)
    {
        // $this->companyName = "Expert programming company";
        // echo $this->companyName."<br>";
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function setDepartment($department){
        $this->department = $department;
    }

    public function getName(){
        return $this->name;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getDepartment(){
        return $this->department;
    }
     
    public function showData(){
        echo "employee name: ".$this->getName().'<br>';
        echo "employee salary: ".$this->getSalary().'<br>';
        echo "employee department: ".$this->getDepartment().'<br>';
        echo "<hr>";
    }

    abstract public function description();

    abstract public function getBonus():string;//return data type string

    // public function __destruct()
    // {
    //     echo "call desconstructor<br>";
    // }



    
   }//end class




?>