<?php


class Student
{
    private $name;
    private $grade;

    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGrade(): float
    {
        return $this->grade;
    }
}
