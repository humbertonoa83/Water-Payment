<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['country', 'province','district','neighborhood','street','avenue','block','place_number','client_id','employee_id'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }

}
