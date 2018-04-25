<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Papatient extends Model
{
    use FormAccessible;

    // Table Name
    protected $table = 'papatient';
    // Primary Key
    public $primarykey ='PaID';
    // Timestamps
    public $timestamps = true;

    public function formDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
