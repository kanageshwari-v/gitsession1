 <?php
class Person
{
  protected $name;
  protected $id;
 
  public function getName()
  {
    return $this->name;
  }
 
  public function setName($name)
  {
    $this->name = $name;
  }
 
  private function callToPrivateNameAndId()
  {
    return "{$this->name} is {$this->id} id num.";
  }
 
  protected function callToProtectedNameAndId()
  {
    return "{$this->name} is {$this->age} id num.";
  }
}
 
class Employee extends Person
{
  private $address;
  private $department;
 
  public function getId()
  {
    return $this->id;
  }
 
  public function setId($id)
  {
    $this->id = $id;
  }
 
  public function getAddress()
  {
    return $this->address;
  }
 
  public function setAddress($address)
  {
    $this->address = $address;
  }
 
  public function getDepartment()
  {
    return $this->department;
  }
 
  public function setDepartment($department)
  {
    $this->department = $department;
  }
 
  public function getNameAndId()
  {
    return $this->callToProtectedNameAndId();
  }
}
 
$employee = new Employee();
 
$employee->setName('tharun');
$employee->setId(12345);
$employee->setDepartment('Software Engineer');
$employee->setAddress('no 3,alapakkam road,sriperumbuthur');
 
echo $employee->getName(); 
echo $employee->getId(); 
echo $employee->getAddress(); 
echo $employee->getDepartment(); 
echo $employee->getNameAndId(); 
echo $employee->callToPrivateNameAndId(); 
?>