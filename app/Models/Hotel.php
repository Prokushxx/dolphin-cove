<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'hotel_id';

    protected $fillable = ['hotel_name'];

    // protected $table = 'hotels';

    public function hotel()
    {
        return $this->HasMany(Patron::class, 'patron_id', 'f_name', 'l_name', 'email');
    }
}
