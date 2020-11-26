<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','surname', 'document_type', 'document_name', 'email', 'telefone', 'gender','country', 'employee_type_id','user_id'];

    public function address()
    {
        return $this->hasOne('App\Models\Address');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
