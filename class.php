<?php
class Student
{
  protected $name;
  protected $age;
  protected $score;
  protected $subjects = array(
        'Arabic'  => 0,
        'English' => 0,
        'Math'    => 0,
        'Scince'  => 0
  );
  protected $minScore = 100;
  protected $maxScore = 200;

  public static $teacher = ' adel el wensh';

  const MIN_AGE = 12;
  const MAX_AGE = 21;

  public function __construct($name, $age)
      {
        $this->setName($name);
        $this->setAge($age); 
      }

  private function setName($name)
      {
        $name = strtolower($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name, 0 , 20);
        $this->name = $name;
      }
      public function getName()
      {
          return $this->name;
      }

      protected function setAge($age)
      {
        
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if($age < static::MIN_AGE || $age > static::MAX_AGE) {
          throw new Exception('sorry age must be between 12 and 20');          
        } else {
          $this->age = $age;
        }
      }
        public function getAge()
        {
          return $this->age;
        }

        public function getSubjects()
        {
          return $this->subject;
        }
        public function getMinScore()
        {
           return $this->minScore;
        }

        public function getMaxScore()
        {
          return $this->maxScore;
        }

        public function setSubjectScore($subjectName, $value)
        {
            if(array_key_exists($subjectName, $this->subjects)) {
              $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
              $value = abs($value);
              if($value > 50){
                throw new Exception('sorry th maximum score for this subject is 50 ');
              } else {
                $this->subjects[$subjectName] = $value;

              }
            }else {
              throw new Exception('Sorry we don\'t have a subject of this name');
            }

        }
        public function getSubjectScore($subjectName)
        {
          if(array_key_exists($subjectName, $this->subjects)) {
             return $this->subjects[$subjectName] ;
          } else {
            throw new Exception('Sorry we don\'t have a subject of this name');
          }

        }
  }

  class Grade1Student extends Student
  {

    private $activity;
    const MIN_AGE = 13;
    const MAX_AGE = 20;

     public function __construct($name, $age)
     {
       parent::__construct($name, $age);
       $this->minScore = 125;
       $this->maxScore = 250;
       $this->subject['computer'] = 0;
     }
     public function setStudentAsActive()
     {
       $this->activity = 'Active';
     }
    public function setStudentAsNotActive()
    {
      $this->activety = 'Not Active';
    }

  } 
  $ali = new Student('mohamed adel morshdy', 20);
  echo $ali->getName() . ' Teacher\'s name is : ' . $ali::$teacher ;
  //$ali = new Grade1Student('MOhaMED YAhiA ADeL', 12);
 //$ali->setSubjectScore('Arabic', 27);
 //echo $ali->getSubjectScore('Arabic');