<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Article', 'locale', 'locale');
    }

    public function getLanguageCodeAttribute()
    {
        return "languages.{$this->locale}";
    }
}
