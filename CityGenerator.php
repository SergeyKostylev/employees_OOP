<?php


class CityGenerator extends AbstractGenerator
{
    private $city;

    public function __construct( array $city)
    {
        $this->city = $city;
    }


    public function generateValue()
    {
        if ($this->isEmpty()) {
            return null;}

        $maxIndex = $this->count_array() - 1;
        return $this->city[rand(0, $maxIndex)];
    }



    private function count_array()
    {
        return count($this->city);

    }
    private function isEmpty()
    {
        return !$this->count_array($this->city);
    }


}