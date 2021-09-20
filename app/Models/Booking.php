<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'patron_id',
        'company_id',
        'hotel_id',
        'schedule_id',
        'status',
        'payment_method'
    ];
}
