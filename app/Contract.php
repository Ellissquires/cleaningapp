<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
    	'contractname', 'startdate', 'enddate', 'totalhours', 'hoursneeded', 'created_at',' updated_at',
    ];
}
