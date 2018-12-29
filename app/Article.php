<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function fenlei()
    {
        return $this->hasMany('App\Fenlei');
    }
}
