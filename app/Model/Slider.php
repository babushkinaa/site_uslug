<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Slider;

class Slider extends Model

{
    public function showAll()
    {
        return Slider::all();
    }
}
