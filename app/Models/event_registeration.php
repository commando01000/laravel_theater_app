<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_registeration extends Model
{
    use HasFactory;
    protected $table = 'event_registeration';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Mobile_Number', 'Email', 'Theatre_Event_Date', 'Movie_Name', 'Showtime'];
}
