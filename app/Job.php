<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
    	'contractname', 'first_name', 'last_name', 'assignedhours',
    ];
}
