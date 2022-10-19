<?php 
  require_once 'employee.php';
  require_once 'office.php';
  class Accounting extends Employee implements Office,Company{
    private $brance;
    function __construct($name,$salary,$brance)
    {
      $this->brance = $brance;
        parent::__construct($name,"accounting",$salary);

    }

    function description()
    {
         echo "Manage salary, tax, benefit";
        //  echo "<hr>";
    }

    function getBonus(): string
    {
        return "10%<br><hr>";   
    }

    public function showData(){
      echo "employee name: ".$this->getName().'<br>';
      echo "employee salary: ".$this->getSalary().'<br>';
      echo "employee department: ".$this->getDepartment().'<br>';
      echo "employee brance: ".$this->brance.'<br>';
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