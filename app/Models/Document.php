<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['document_number', 'document_type','issue_place','issue_date','expiration_date','user_id'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
