<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joblists extends Model
{
    //
    protected $fillable = ['company', 'positionName', 'adr', 'edu','exp','lowmoney',
        'highmoney','year','curmon','jobclass','industry'];

}
