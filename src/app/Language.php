<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function languageType()
    {
        return $this->hasOne(LanguageType::class);
    }
}
