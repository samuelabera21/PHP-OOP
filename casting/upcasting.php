<!-- Upcasting means treating a child class object as an instance of its parent class.

👉 This is automatic in PHP (you don’t need to write anything special).
 -->


<?php
class Animal {
    public function makeSound() {
        echo "Animal sound";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog barks";
    }
}

$dog = new Dog();

// Upcasting (automatic)
$animal = $dog;  // Dog → Animal

$animal->makeSound(); // ✅ Works
// $animal->bark(); ❌ Not recommended (depends on context)
?>