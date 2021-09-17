<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';
    
    protected $fillable= [
    'user_id',
    'company_id',
    'hotel_id',
    'p_id',
    'schedule_id',
    'current_date',
    'status',
    'payment_method'
    ];
}
