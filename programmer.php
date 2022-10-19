<?php 
  require_once 'employee.php';
  require_once 'office.php';
  class Programmer extends Employee implements Office{
    private $epx;

    function __construct($name,$salary,$exp)
    {
        
        parent::__construct($name,"progarmmer",$salary);
        $this->exp = $exp;
    }

    function description()
    {
        echo "develope the product and maintrain";
        // echo "<hr>";
    }

    function getBonus(): string
    {
        return "20%<br><hr>"; 
    }
    
    //overloading method
    function __call($name,$args){
      if ($name == "skill") {
        $num = count($args); // count argument 
        switch($num){
                case 1:
                  echo "programming languags: ".$args[0]."<br>";
                  break;
                case 2:
                  echo "programming languags: ".$args[0]." ".$args[1]."<br>";
                  break;
                case 3:
                  echo "programming languags: ".$args[0]." ".$args[1]." ".$args[2]."<br>";
                  break;
                default:
                  echo "No data <br>";
        }
      }
    }

    //magic method
    function __toString():string{
      return "programming name : ".$this->getName()." salary : ".$this->getSalary()."<br>";
    }

    public function showData(){
      echo "employee name: ".$this->getName().'<br>';
      echo "employee salary: ".$this->getSalary().'<br>';
      echo "employee department: ".$this->getDepartment().'<br>';
      echo "employee exp: ".$this->exp." year".'<br>';
      echo "<hr>";
  }

    public function officeName($name)
    {
      echo "brance name: ".$name.'<br>';
    }

    public function setWorking($work): string
    {
      return "work type: ".$work.'<br>';
    }

    public function setCompanyName($name): string
    {
      return "work type: ".$name.'<br>';
    }
    
  }



?>