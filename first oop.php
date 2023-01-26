<?php
class Employee
{
   public $name;
   public $age;
   public $address;

   public $salary;
   public $tax;
   public $overtime;
   public $overtimeRate;
   public $abbsent;
   public $abbsentrate;

   public function calculateovertime(){
      return $this->overtime * $this->overtimeRate;
   }
   public function calculateabbsent(){
      return $this->abbsent * $this->abbsentrate;
   }
   public function calculateTotalsalary(){
      return ($this->salary - ($this->salary * $this->tax)) + $this->calculateovertime() - $this->calculateabbsent();
   }


}

$ahmed = new Employee;
$ahmed->name = 'Ahmed Mohsen Ali';
$ahmed->age = 25;
$ahmed->address = 'Cario,Egypt';
$ahmed->salary = 5000;
$ahmed->tax = 0.02;
$ahmed->overtime = 25;
$ahmed->overtimeRate = 25;
$ahmed->abbsent = 1;
$ahmed->abbsentrate = 75;

$mohamed = new Employee;
$mohamed->name = 'Mohamed Adel Morshdy';
$mohamed->age = 25;
$mohamed->address = 'Garbia,Egypt';
$mohamed->salary = 7000;
$mohamed->tax = 0.02;
$mohamed->overtime = 24;
$mohamed->overtimeRate = 35;
$mohamed->abbsent = 2;
$mohamed->abbsentrate = 70;

echo '<pre>';
var_dump($ahmed);
echo '</pre>';
echo '<p>' . $ahmed->name . ' has overtime of ' . $ahmed->calculateovertime() . ' L.E' . '</P>';
echo '<P>' . $ahmed->name . ' has abbsent of ' . $ahmed->calculateabbsent() . ' L.E' . '</P>';
echo '<p>' . $ahmed->name . ' has total salary of ' . $ahmed->calculateTotalsalary() . ' L.E' . '</p>';

echo '<p>' . $mohamed->name . ' has overtime of ' . $mohamed->calculateovertime() . ' L.E' . '</P>';
echo '<P>' . $mohamed->name . ' has abbsent of ' . $mohamed->calculateabbsent() . ' L.E' . '</P>';
echo '<p>' . $mohamed->name . ' has total salary of ' . $mohamed->calculateTotalsalary() . ' L.E' . '</p>';

$mohamed = new Employee;
$ali = new Employee;
$hend = new Employee;



class Car
{
	public $doors;
	public $wheels;
	public $rims;
	public $speed;
	public $horsepower;
	public $color;
}
$bmw = new Car;
$bmw->speed = 340;
$bmw->doors = 2;
$bmw->rims = 'sports';


