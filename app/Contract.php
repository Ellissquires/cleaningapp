<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
    	'contractname', 'startdate', 'enddate', 'totalhours', 'hoursneeded','postcode','description', 'created_at',' updated_at',
    ];
}
