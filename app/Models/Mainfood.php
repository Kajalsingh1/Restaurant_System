<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainfood extends Model
{
    use HasFactory;
    protected $table = 'mainfood';
    protected $casts=['id'=>'string'];
}
