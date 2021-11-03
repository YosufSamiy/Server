<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

use App\Grade;

class Classroom extends Model
{

    use HasTranslations;
    public $translatable = ['Name','Notes'];

    protected $fillable=['Name','Notes','Grade_id'];

    protected $table = 'Classrooms';
    public $timestamps = true;

    public function Grades()
    {
        return $this->belongsTo('App\Grade', 'Grade_id');
    }

}
