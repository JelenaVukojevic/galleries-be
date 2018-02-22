<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function imager()
    {
        return $this->hasMany(Picture::class);
    }
}