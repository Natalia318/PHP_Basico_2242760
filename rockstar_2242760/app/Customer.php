<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table="customer";
    protected $primaryKey="CustomerId";
    public $timestamps = false;

}