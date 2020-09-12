<?php

namespace App\Classes\Rules;

use App\Models\Product;

class RuleB
{
    protected $product;

    public $rules = [];

    /**
     * __construct
     *
     * @author Shibin Philip
     *
     * @param  \App\Models\Product $product
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->ruleDownloadSpeedGreaterThan100AndFiber();
    }

    /**
     * Download speed greater than 100 and fiber
     *
     * @author Shibin Philip
     *
     * @return void
     */
    public function ruleDownloadSpeedGreaterThan100AndFiber()
    {
        $this->rules["Download speed greater than 100 and fiber"] = $this->product->where([
            ["download_speed", ">", 100],
            ["technology", "=", "fiber"],
        ]);
    }
}
