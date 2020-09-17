<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fond extends Model
{
    protected $fillable = ['id', 'name', 'available', 'type_prefix', 'category_id', 'vendor_id', 'image', 'vendor_id', 'price', 'url'];
}
