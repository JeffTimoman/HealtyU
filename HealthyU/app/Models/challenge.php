<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class challenge extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image'];
    public $timestamps = true;
}
