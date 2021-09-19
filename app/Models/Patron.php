<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    use HasFactory;
    protected $primaryKey = "patron_id";

    // protected $table = 'patrons';

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
    ];

    public function patron()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'hotel_name');
    }
}
