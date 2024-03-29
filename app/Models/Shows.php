<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    use HasFactory;
    protected $table = 'Shows';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Description', 'Image', 'Rating','Showdate','Showtime'];
}
