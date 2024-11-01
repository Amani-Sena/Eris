<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model {
    protected $fillable= ['user_id' ,'phone', 'address', 'date', 'time', 'cep'];
}
