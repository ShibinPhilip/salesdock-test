<?php

namespace App\Repositories;

use App\Classes\Rules;
use App\Http\Resources\ProductResource;

class ProductRepository
{
    protected $rules;

    /**
     * __construct
     *
     * @author Shibin Philip
     *
     * @param  mixed $product
     *
     * @return void
     */
    public function __construct(Rules $rules)
    {
        $this->rules = $rules;
    }

    /**
     * Get all products
     *
     * @author Shibin Philip
     *
     * @return arrat $list
     */
    public function getList()
    {
        $list = [];
        foreach ($this->rules->rules as $key => $rule) {
            $list[$key] = ProductResource::collection($rule->get())->resolve();
        }
        return $list;
    }
}
