<?php

declare(strict_types=1);

// Concept 1 example: object = data (properties) + behavior (methods)
class Student
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return "Hi, I am {$this->name} and I am {$this->age} years old.";
    }
}

$student = new Student("Meron", 21);

echo $student->introduce() . PHP_EOL;
