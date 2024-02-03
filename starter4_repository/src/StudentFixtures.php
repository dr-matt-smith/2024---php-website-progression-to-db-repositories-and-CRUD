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



        $students[$matt->getId()] = $matt;
        $students[$joan->getId()] = $joan;

        return $students;
    }
}