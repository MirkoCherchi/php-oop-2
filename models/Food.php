<?php


require_once __DIR__ . "/Food.php";
class Food extends Product
{
    private $ingredients;
    private $expiration_date;

    private $is_gluten_free;
    private $is_vegan;

    public function set_ingredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
    public function get_ingredients()
    {
        return $this->ingredients;
    }
}
