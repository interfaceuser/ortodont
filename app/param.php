<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class param extends Model
{
    public static function toList($arr)
    {

        $result = [];
        foreach ($arr as $key => $value) {
            $result[$value['name']] = $value['value'];
        }
        return $result;
    }
}