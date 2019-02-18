<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Language', 'locale', 'locale');
    }
}
