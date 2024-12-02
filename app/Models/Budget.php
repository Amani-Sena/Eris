<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model {
    protected $fillable= ['user_id' ,'phone', 'address', 'date', 'time', 'cep', 'city', 'number', 'district', 'complement', 'state', 'status'];

    
public function user() {
    return $this->belongsTo(User::class);
}
}

