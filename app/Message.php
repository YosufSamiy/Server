<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // use HasTranslations;
    // public $translatable = ['name','topic'];

    protected $fillable=['name','email','phone','topic'];
    protected $table = 'Messages';
    public $timestamps = true;
}
