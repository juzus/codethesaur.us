<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExampleCode extends Model
{
    public function example()
    {
        return $this->belongsTo(Example::class);
    }
}
