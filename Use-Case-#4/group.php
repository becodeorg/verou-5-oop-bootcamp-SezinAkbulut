<?php


class Group
{
    private $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function calculateAverage(): float
    {
        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getGrade();
        }

        $count = count($this->students);
        return $count > 0 ? $total / $count : 0;
    }

    public function moveStudent(Student $student, Group $targetGroup)
    {
        $this->removeStudent($student);
        $targetGroup->addStudent($student);
    }

    private function removeStudent(Student $student)
    {
        foreach ($this->students as $key => $groupStudent) {
            if ($groupStudent->getName() === $student->getName()) {
                unset($this->students[$key]);
                break;
            }
        }
    }

    private function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function getStudents(): array
    {
        return $this->students;
    }
}
