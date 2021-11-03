<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Section extends Model
{
    use HasTranslations;
    public $translatable = ['Name','Notes','Describe'];

    protected $fillable=['Name','Notes','Section_id','image_path','Describe'];
    protected $table = 'Sections';
    public $timestamps = true;


    public function servies(){

       return $this->hasMany('App\Service','Section_id','id');

    }
}
