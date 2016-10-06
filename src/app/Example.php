<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function exampleCode()
    {
        return $this->hasMany(ExampleCode::class);
    }
}
