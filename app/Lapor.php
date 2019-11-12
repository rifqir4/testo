<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapor extends Model
{
    //Table Name
    protected $table = 'lapors';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
