<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brand','reference','status'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function rechargerSell()
    {
        return $this->hasMany('App\Models\Sell');
    }
}

