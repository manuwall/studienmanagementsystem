<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class CRF extends Model
{
    use FormAccessible;

    // Table Name
    protected $table = 'CRF';
    // Primary Key
    public $primarykey ='crid';

}
