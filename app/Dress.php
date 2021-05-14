<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['name', 'size', 'image', 'color', 'quantity', 'price', 'description'];
}
