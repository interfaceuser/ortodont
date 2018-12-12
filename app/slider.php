<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    public function getClasslistAttribute()
    {
        return explode(';', $this->div_classes);
    }

    public function getDesclistAttribute()
    {
        return explode(';', $this->desc);
    }
}