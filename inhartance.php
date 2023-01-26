<?php
class Student
{
  public $name;
  public $age;
  private $level;
  public $score;
  public $subject = array(
        'Arabic'  => 0,
        'English' => 0,
        'Math'    => 0,
        'Scince'  => 0
  );
  public $minScore = 150;
  public $maxScore = 300;

  public function __construct($name, $age)
  {
    $this->name = $name;
    if($age >= 12){
      $this->age = $age;
    } else {
      throw new Exception('Sorry The Student\'s Age Must Be Gerater 12');
    }
  }
  public function welcoeStudent()
  {
    echo 'welcome to our class ' . $this->name;
  }
  public function setLevel($level)
  {
    // make sure this is integer
    $level = abs(filter_var($level, FILTER_SANITIZE_NUMBER_INT));
     if($level < 1 || $level > 12){
        throw new Exception('sorry level must be betwen 1 and 12');
      } else {
          $this->level= $level;
        }
    }
    public function getLevl(){
      return $this->level;
    } 

    public function setName($name)
    {
      $this->name = $this->filterName($name);
    }
    
    private function filterName($name)
    {
      return ucwords(substr($name, 0, 12));
    }
} 

$mohamed = new Student('Mohamed Adel Mohsen', 12);
$mohamed->setLevel(-5);
echo $mohamed->getLevl();
//$mohamed->welcoeStudent();

?>