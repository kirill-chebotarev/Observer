<?php


namespace Entity;


class Vacancy
{
    protected $description;
    protected $category;

    public function __construct(string $description, Category $category) {
        $this->description = $description;
        $this->category = $category;
        $category->notify();
    }

    public function getDescription()
    {
        return $this->description;
    }

}