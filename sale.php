<?php 
  require_once 'employee.php';
  require_once 'office.php';
  class Sale extends Employee implements Office{
    private $area;
    function __construct($name,$salary,$area)
    {
      $this->area = $area;
        parent::__construct($name,"sale",$salary);
    }

    function description()
    {
        echo "sale the product in each area";
        // echo "<hr>";
    }

    function getBonus(): string
    {
        return "15%<br><hr>"; 
    }

    public function showData(){
      echo "employee name: ".$this->getName().'<br>';
      echo "employee committion: ".$this->getSalary().'<br>';
      echo "employee department: ".$this->getDepartment().'<br>';
      echo "responsibility area: ".$this->area.'<br>';
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