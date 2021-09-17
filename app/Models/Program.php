<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey = 'p_id';

<<<<<<< HEAD
    protected $fillable = [
        'p_name',
        'p_costs'
    ];
=======
    protected $fillable = ['p_name', 'p_costs'];
>>>>>>> e64651ed67a794c724eb8d2759dc6e08e4466e60
}
