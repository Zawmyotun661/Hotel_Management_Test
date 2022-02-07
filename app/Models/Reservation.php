<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = 
    ['first_name','last_name','email','address','zip_code','city','state','phone',
    'check_in_date','check_out_date','check_in_time','check_out_time','adult_number','children_number',
    'room','room_1','room_2','instructions',
    ];
    use HasFactory;
}
