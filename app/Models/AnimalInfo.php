<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalInfo extends Model
{
    use HasFactory;
    protected $table = "dieren";

    public $timestamps = false;
}
