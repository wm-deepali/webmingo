<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplicationLog extends Model
{
    protected $fillable = ['career_application_id', 'user_id', 'type', 'from_value', 'to_value', 'note'];
}
