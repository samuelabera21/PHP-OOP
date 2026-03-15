<?php

declare(strict_types=1);

namespace OOP\UnifiedDemo;

/*
 A single-file OOP system demo that includes:
 - Class/Object
 - Constructor/Destructor
 - Access Modifiers
 - Encapsulation
 - Inheritance
 - Abstraction
 - Interface
 - Polymorphism (overriding)
 - Exception Handling

 Excludes: Session and Cookies
*/

interface Learnable
{
    public function learn(string $topic): string;
}

abstract class Person
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getRole(): string;

    public function introduce(): string
    {
        return "I am {$this->name} and my role is {$this->getRole()}.";
    }
}

class Student extends Person implements Learnable
{
    private string $studentId;

    // Encapsulation: private data, controlled through methods.
    private array $courses = [];

    public function __construct(string $name, string $studentId)
    {
        parent::__construct($name);
        $this->studentId = $studentId;
    }

    public function getRole(): string
    {
        return 'Student';
    }

    public function getStudentId(): string
    {
        return $this->studentId;
    }

    public function enroll(string $courseTitle): void
    {
        if (!in_array($courseTitle, $this->courses, true)) {
            $this->courses[] = $courseTitle;
        }
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function learn(string $topic): string
    {
        return "{$this->name} is learning {$topic}.";
    }

    // Polymorphism (method overriding): child-specific behavior.
    public function introduce(): string
    {
        return "I am student {$this->name} (ID: {$this->studentId}).";
    }
}

class Instructor extends Person
{
    private string $specialization;

    public function __construct(string $name, string $specialization)
    {
        parent::__construct($name);
        $this->specialization = $specialization;
    }

    public function getRole(): string
    {
        return 'Instructor';
    }

    public function teach(string $courseTitle): string
    {
        return "{$this->name} teaches {$courseTitle} ({$this->specialization}).";
    }

    public function introduce(): string
    {
        return "I am instructor {$this->name}, specialized in {$this->specialization}.";
    }
}

class Course
{
    public string $title;
    protected Instructor $instructor;
    private array $students = [];

    public function __construct(string $title, Instructor $instructor)
    {
        $this->title = $title;
        $this->instructor = $instructor;
    }

    public function addStudent(Student $student): void
    {
        $this->students[$student->getStudentId()] = $student;
        $student->enroll($this->title);
    }

    public function getStudentsCount(): int
    {
        return count($this->students);
    }

    public function getSummary(): string
    {
        return "Course: {$this->title}, Instructor: {$this->instructor->getName()}, Students: {$this->getStudentsCount()}";
    }
}

class GradeBook
{
    // Encapsulated storage of grades.
    private array $grades = [];

    public function setGrade(Student $student, Course $course, float $grade): void
    {
        if ($grade < 0 || $grade > 100) {
            throw new \Exception('Grade must be between 0 and 100.');
        }

        $this->grades[$student->getStudentId()][$course->title] = $grade;
    }

    public function getGrade(Student $student, Course $course): ?float
    {
        return $this->grades[$student->getStudentId()][$course->title] ?? null;
    }
}

class AppLogger
{
    public function __construct()
    {
        echo 'System started.' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'System finished (destructor called).' . PHP_EOL;
    }
}

// -------------------- DEMO FLOW --------------------
$logger = new AppLogger();

echo PHP_EOL . '1) Creating objects from classes' . PHP_EOL;
$teacher = new Instructor('Sara', 'Web Development');
$studentA = new Student('Eyob', 'STU-001');
$studentB = new Student('Lidiya', 'STU-002');
$phpCourse = new Course('PHP OOP', $teacher);

echo PHP_EOL . '2) Inheritance + Polymorphism' . PHP_EOL;
$people = [$teacher, $studentA, $studentB];
foreach ($people as $person) {
    echo $person->introduce() . PHP_EOL;
}

echo PHP_EOL . '3) Interface usage' . PHP_EOL;
echo $studentA->learn('Encapsulation') . PHP_EOL;

echo PHP_EOL . '4) Encapsulation + Access Modifiers in action' . PHP_EOL;
$phpCourse->addStudent($studentA);
$phpCourse->addStudent($studentB);
echo $phpCourse->getSummary() . PHP_EOL;

echo PHP_EOL . '5) Exception Handling with GradeBook' . PHP_EOL;
$gradeBook = new GradeBook();

try {
    $gradeBook->setGrade($studentA, $phpCourse, 89.5);
    echo 'Grade saved for ' . $studentA->getName() . ': ' . (string) $gradeBook->getGrade($studentA, $phpCourse) . PHP_EOL;

    // This will throw an exception (invalid grade).
    $gradeBook->setGrade($studentB, $phpCourse, 150);
} catch (\Exception $e) {
    echo 'Caught exception: ' . $e->getMessage() . PHP_EOL;
} finally {
    echo 'Grade operation completed.' . PHP_EOL;
}

echo PHP_EOL . '6) Final system view' . PHP_EOL;
echo $teacher->teach('PHP OOP') . PHP_EOL;
echo $phpCourse->getSummary() . PHP_EOL;

echo PHP_EOL . 'Done.' . PHP_EOL;
