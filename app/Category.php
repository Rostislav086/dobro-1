<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function fonds() {
        return $this->hasMany(Fond::class, 'category_id');
    }
}
