<?php

namespace App\Classes;

use App\Models\Product;

class Rules
{
    public $rules = [];

    /**
     * __construct
     *
     * @author Shibin Philip
     *
     * @param  mixed $product
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->getAllRules($product);
    }

    /**
     * Get all rules from each class methods
     *
     * @author Shibin Philip
     *
     * @param  \App\Models\Product $product
     *
     * @return void
     */
    public function getAllRules($product)
    {
        $files = glob("../app/Classes/Rules/*.php");
        foreach ($files as $file) {
            $class = basename($file, '.php');
            $className = 'App\\Classes\\Rules\\' . $class;
            if (class_exists($className)) {
                $obj = new $className($product);
                $this->rules = array_merge($this->rules, $obj->rules);
            }
        }
    }
}
