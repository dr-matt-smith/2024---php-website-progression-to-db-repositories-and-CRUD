<?php

namespace Tudublin;

class StudentFixtures
{
    public function getStudentArray()
    {
        $students = [];

        $matt = new Student();
        $matt->setName('matt murphy');
        $matt->setGpa(3.5);
        $matt->setId(1);

        $joan = new Student();
        $joan->setName('Joan Jones');
        $joan->setGpa(3.75);
        $joan->setId(2);

        $another = new Student();
        $another->setName('another student');
        $another->setGpa(2);
        $another->setId(3);

        $another2 = new Student();
        $another2->setName('another student kahdsfjkhsdfjk');
        $another2->setGpa(0.5);
        $another2->setId(4);

        $students[$matt->getId()] = $matt;
        $students[$joan->getId()] = $joan;
        $students[$another->getId()] = $another;
        $students[$another2->getId()] = $another2;

        return $students;
    }
}