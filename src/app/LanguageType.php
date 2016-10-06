<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageType extends Model
{
    public function language()
    {
        $this->belongsTo(Language::class);
    }
}
