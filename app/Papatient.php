<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papatient extends Model
{
    // Table Name
    protected $table = 'papatient';
    // Primary Key
    public $primarykey ='PaID';
    // Timestamps
    public $timestampts = true;
}
