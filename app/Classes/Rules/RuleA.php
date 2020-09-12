<?php

namespace App\Classes\Rules;

use App\Models\Product;

class RuleA
{
    protected $product;

    public $rules;

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
        $this->ruleUploadSpeedLessThan100();
        $this->ruleUploadSpeedLessThan100AndFiber();
    }

    /**
     * Upload speed less than 100
     *
     * @author Shibin Philip
     *
     * @return void
     */
    public function ruleUploadSpeedLessThan100()
    {
        $this->rules["Upload speed less than 100"] = $this->product->where("upload_speed", "<", 100);
    }

    /**
     * Upload speed less than 100 and fiber
     *
     * @author Shibin Philip
     *
     * @return void
     */
    public function ruleUploadSpeedLessThan100AndFiber()
    {
        $this->rules["Upload speed less than 100 and fiber"] = $this->product->where([
            ["upload_speed", "<", 100],
            ["technology", "=", "fiber"],
        ]);
    }
}
