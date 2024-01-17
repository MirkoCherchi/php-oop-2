<?php

require_once __DIR__ . "/Category.php";
class Product
{

    private $id;
    private $name;
    private $description;
    private $category;
    private $price;
    private $image;
    private $is_available;

    public function __construct($id, $image, $name, Category $category)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setCategory($category);
        $this->setImage($image);
    }

    //Getters

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getIsAvailable()
    {
        return $this->is_available;
    }

    // Setters


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setIsAvailable($is_available)
    {
        $this->is_available = $is_available;
    }
}
