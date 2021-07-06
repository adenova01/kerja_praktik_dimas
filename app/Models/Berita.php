<?php

namespace App\Models;
use App\Models\UserLogin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['id_berita','text_header','link_berita','id_user'];
}
