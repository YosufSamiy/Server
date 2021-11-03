<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Sections;


class Service extends Model
{
    use HasTranslations;
    public $translatable = ['Name','Notes','Describe'];

    protected $fillable=['Name','Notes','Describe','Section_id','image_path','BestServis'];

    protected $table = 'Services';
    public $timestamps = true;

    public function Sections()
    {
        return $this->belongsTo('App\Section', 'Section_id');
    }

}
