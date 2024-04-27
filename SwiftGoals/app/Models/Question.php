<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'clientID',
    ];

    public function answers(){
        return $this->hasMany(Answer::class, 'questionID');
    }

    public function user(){
        return $this->belongsTo(User::class, 'clientID');
    }
}
