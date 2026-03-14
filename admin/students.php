<?php
// Students Management Script

class Student {
    public $name;
    public $id;
    public $email;

    public function __construct($name, $id, $email) {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
    }
}

class StudentManagement {
    private $students = [];

    public function addStudent($name, $id, $email) {
        $student = new Student($name, $id, $email);
        $this->students[] = $student;
    }

    public function getStudents() {
        return $this->students;
    }
}

$studentManagement = new StudentManagement();
$studentManagement->addStudent('John Doe', 1, 'john@example.com');
$studentManagement->addStudent('Jane Doe', 2, 'jane@example.com');

foreach ($studentManagement->getStudents() as $student) {
    echo 'Name: ' . $student->name . ', ID: ' . $student->id . ', Email: ' . $student->email . '\n';
}
?>