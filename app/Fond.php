<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fond extends Model
{
    protected $fillable = [ 'name', 'available', 'type_prefix', 'category_id', 'vendor_id', 'image', 'price'];

    public function category() {
        return $this->belongsTo(Fond::class, 'category_id');
    }
}
