<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'address', 'email', 'phone', 'nid', 'gender', 'designation', 'blood_group', 'photo', 'status', 'joining_date', 'ending_date',
    ];
}
