<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\StudentRepository;
use Tudublin\Student;
use Tudublin\StudentFixtures;

$studentRepository = new StudentRepository();
$studentRepository->resetTable();

$studentFixtures = new StudentFixtures();
$students = $studentFixtures->getStudentArray();

$studentRepository->insertMany($students);
