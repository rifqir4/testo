<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //Table Name
    protected $table = 'people';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
