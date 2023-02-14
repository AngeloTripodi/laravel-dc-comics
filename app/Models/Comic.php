<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = array('title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type');
}
