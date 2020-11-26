<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    protected $table = "recharges_sells";
    protected $fillable = ['value', 'code', 'payment_type',	'via','counter_id',	'user_id'];

    public function counter()
    {
        return $this->belongsTo('App\Models\Counter');
    }
}
