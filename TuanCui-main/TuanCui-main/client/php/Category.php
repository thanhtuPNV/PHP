<?php
namespace php;
class Category
{
    public $categoryId;
    public $category;
    public $categoryDes;

    /**
     * @param string $category
     * @param string $categoryDes
     */
    public function __construct(string $category, string $categoryDes)
    {
        $this->categoryId = date("m-d-h-i-s-a");
        $this->category = $category;
        $this->categoryDes = $categoryDes;
    }
}