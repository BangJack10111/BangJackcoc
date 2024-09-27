<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangCOC extends Model
{
    use HasFactory;

    protected $table = 'BangCOC';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'price', 'photo', 'stock'];


}
