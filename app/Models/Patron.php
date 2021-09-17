<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    use HasFactory;
    protected $primaryKey = "user_id";

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
    ];
}
