<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "clientts";
    protected $fillable = ['name','surname', 'email', 'telephone', 'gender', 'nationality', 'client_type_id', 'user_id'];


    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function breakdown()
    {
        return $this->hasMany('App\Models\Breakdown');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function document()
    {
        return $this->hasOne('App\Models\Document');
    }

    public function counters()
    {
        return $this->hasMany('App\Models\Counter');
    }


}
