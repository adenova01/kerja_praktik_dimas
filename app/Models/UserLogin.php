<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $table = 'user';
    protected $fillable = ['id','nama','username','password','role'];
}
