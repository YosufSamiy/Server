<?php

namespace Grade;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model 
{

    protected $table = 'Grades';
    public $timestamps = true;

}
$table->increments('id');
$table->timestamps();
$table->string('Name');
$table->longText('Notes');








