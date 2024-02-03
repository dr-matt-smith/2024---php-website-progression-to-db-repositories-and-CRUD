<?php

namespace Tudublin;

class Student
{
    private int $id;
    private string $name;
    private float $gpa;

    public function __toString(): string
    {
        return 'STUDENT: '
            . " id = {$this->id}"
            . ", name = {$this->name}"
            . ", gpa = {$this->gpa}"
            ;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getGpa(): float
    {
        return $this->gpa;
    }

    /**
     * @param float $gpa
     */
    public function setGpa(float $gpa): void
    {
        $this->gpa = $gpa;
    }


}