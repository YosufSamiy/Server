<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Partner extends Model
{
    use HasTranslations;
    public $translatable = ['name','topic'];

    protected $fillable=['name','topic','image_path'];
    protected $table = 'Partners';
    public $timestamps = true;


    // public function Servies(){



    //     return $this->hasMany('');
    // }
}
