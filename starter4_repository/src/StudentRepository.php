<?php

namespace Tudublin;

class StudentRepository
{
    private array $students = [];

    public function __construct()
    {
        $studentFixtures = new StudentFixtures();
        $students = $studentFixtures->getStudentArray();
        $this->students = $students;
    }

    public function findAll(): array
    {
        return $this->students;
    }

    public function find(int $id): Student
    {
        return $this->students[$id];
    }


}