<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Grade;


class Grade extends Model
{
    
    use HasTranslations;
    public $translatable = ['Name','Notes'];

    protected $fillable=['Name','Notes','Grade_id '];
    protected $table = 'Grades';
    public $timestamps = true;


    
}
