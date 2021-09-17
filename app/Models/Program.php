<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey = 'p_id';
    protected $fillable = ['p_name', 'p_costs'];
}
