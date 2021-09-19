<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  use HasFactory;

  protected $primaryKey = 'schedule_id';

  protected $fillable = [
    'program_id',
    'exc_date'
  ];

  /**
   * Set the schedule date.
   *
   * @param  string  $value
   * @return void
   */
  public function setExcDateAttribute($value)
  {
    $this->attributes['exc_date'] = date_create($value);
  }
}
