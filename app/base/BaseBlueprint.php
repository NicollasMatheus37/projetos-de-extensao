<?php


namespace App\base;


use Illuminate\Database\Schema\Blueprint;

class BaseBlueprint extends Blueprint
{
    public function timestamps($precision = 0)
    {
        parent::timestamps($precision);
    }
}
