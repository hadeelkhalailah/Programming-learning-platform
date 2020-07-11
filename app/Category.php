<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = "cat_id";

    public function post(){
        return $this->hasMany("App\Post");
    }
}
