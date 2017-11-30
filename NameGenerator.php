<?php


class NameGenerator extends AbstractGenerator
{
    private $firstName;
    private $lastName;

    public function __construct( array $firstName, array $lastName)
    {
        $this->firstName = array_values($firstName);
        $this->lastName = array_values($lastName);
    }

    public function generateValue()
    {
        if ($this->isEmpty($this->firstName) || $this->isEmpty($this->lastName)) {
            return null;
        }
        $maxIndexFirstName = $this->count_array($this->firstName) - 1;
        $maxIndexLastName = $this->count_array($this->lastName) - 1;
        $randFirstName = $this->firstName [rand(0, $maxIndexFirstName)];
        $randLastName = $this->lastName [rand(0, $maxIndexLastName)];

        return $fullName= "{$randFirstName}" . " "  . "{$randLastName}";

    }

    public function count_array($array)
    {
        return count($array);

    }
    private function isEmpty($array)
    {
        return !$this->count_array($array);
    }



}