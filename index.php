<?php
    // require_once 'employee.php';
    require_once 'accounting.php';
    require_once 'programmer.php';
    require_once 'sale.php';
    require_once 'company.php';


//    $emp1 = new Accounting("Johny", "200000","North");
//    $emp1->showData();

   $emp2 = new Programmer("Juke", "200000",5);
   $emp2->officeName("SG");
   echo $emp2->setWorking("office");
   $emp2->showData();

   $emp3 = new Programmer("Jake", "200000",5);
   $emp3->officeName("AUS");
   echo $emp3->setCompanyName("fu555");
   echo $emp3->setWorking("office");

   $emp3->showData();

//    $emp3 = new Sale("Jim", "200000","Th");
//    $emp3->showData();

    function showEmployee(Employee $obj){
        echo "-----Show employee data-----<br>";
        echo "employee name: ".$obj->getName().'<br>';
        echo "employee salary: ".$obj->getSalary().'<br>';
        echo "employee name: ".$obj->getName().'<br>';
        echo "employee name: ".$obj->getDepartment().'<br>';
    }

    showEmployee($emp3);

?>