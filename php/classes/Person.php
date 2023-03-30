<?php
    // Значение hp не может превышать 100ед.
    class Person{
        private $name; // String
        public $lastname; // String
        public $age; // int
        private $hp; // int
        private $mother; // Person
        private $father; // Person

        public function __construct($name, $lastname, $age, $mother, $father){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->hp = 100;
            $this->mother = $mother;
            $this->father = $father;
        }
        public static function sayHi(){ // метод
            echo "Hello world";
        }

        public function getHp(){return $this->hp;}
        public function getName(){return $this->name;}
        public function getMother(){return $this->mother;}

        public function setHp($val){
            if($this->hp+$val >= 100) $this->hp = 100;
            else $this->hp = $this->hp+$val;
        }
        public function info(){
            $result = "Имя: ".$this->name."<br>
                       Фамилия: ".$this->lastname."<br>
                       Возраст: ".$this->age."<br>";
            if($this->mother != null){
                $result .= "Имя мамы: ".$this->mother->name."<br>";
                if($this->mother->mother != null){
                    $result .= "Имя Бабушки по маминой линии: ".$this->mother->mother->name;
                }
            }
            if($this->father != null){
                $result .= "Имя папы: ".$this->father->name."<br>";
            }
            return $result;
        }
    }
    /*$person4 = new Person("Катя", "Петрова", 70, null, null);
    $person3 = new Person("Наталья", "Иванова", 49, $person4, null);
    $person2 = new Person("Вася","Иванов", 49, null, null);
    $person1 = new Person("Иван", "Иванов", 10, $person3, $person2);*/
    Person::sayHi();
