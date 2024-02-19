<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hishab extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'category', 'amount'];
}
