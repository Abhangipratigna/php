

<?php

class A
{
    public function display()
    {
        echo "pratigna";
    }
}

$obj=new A;
$obj->display();

?>




<?php

class Person {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.";
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function displayInfo() {
        echo "Name: " . $this->getName() . "\n";
        echo "Age: " . $this->getAge() . "\n";
    }
}

$person = new Person();

$person->setName("John Doe");
$person->setAge(30);

echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";

$person->displayInfo();

?>
