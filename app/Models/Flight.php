<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['name', 'updated_at', 'creation_date'];
    const CREATED_AT = 'flight';
}
