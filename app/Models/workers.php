<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    protected $table = 'workers';
    protected $fillable = ['name','email','password','tasks'];
}
