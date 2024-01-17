<?php


require_once __DIR__ . "/Food.php";
class Game extends Product
{
    private $material;
    private $age;

    private $size;


    public function set_material($material)
    {
        $this->material = $material;
    }
    public function get_material()
    {
        return $this->material;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }
    public function get_age()
    {
        return $this->age;
    }

    public function set_size($size)
    {
        $this->size = $size;
    }
    public function get_size()
    {
        return $this->size;
    }
}
