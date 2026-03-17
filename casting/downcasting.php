<!-- Downcasting means treating a parent class object as a child class object.

👉 ⚠️ PHP does NOT support explicit casting like (Dog)$animal

So we simulate it using type checking (instanceof)
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

$animal = new Dog(); // Actually Dog object

// Downcasting (safe check)
if ($animal instanceof Dog) {
    $dog = $animal; // treat as Dog
    $dog->bark();   // ✅ Works
}
?>