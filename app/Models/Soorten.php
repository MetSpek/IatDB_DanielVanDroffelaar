<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soorten extends Model
{
    use HasFactory;
    protected $table = "soorten";
    
    public $timestamps = false;
}
