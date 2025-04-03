<?php
header('Content-Type: application/json');

class Student {
    public $name;
    public $gemiddeldCijfer;
    public $klas;

    function __construct($name, $gemiddeldCijfer, $klas) {
        $this->name = $name;
        $this->gemiddeldCijfer = $gemiddeldCijfer;
        $this->klas = $klas;
    }
}

class Data {
    public $studenten;

    function __construct($studenten) {
        $this->studenten = $studenten;
    }
}

$student1 = new Student("mario", 7.5, "4A");
$student2 = new Student("wario", 4.5, "4B");
$student3 = new Student("bowser", 6.0, "4C");
$student4 = new Student("peach", 8.9, "4A");

$data = new Data([$student1, $student2, $student3, $student4]);

echo json_encode($data);
