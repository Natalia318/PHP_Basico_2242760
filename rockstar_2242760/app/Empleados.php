<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    protected $table="employee";
    protected $primaryKey="EmployeeId";
    //omitir campo de auditoria
    public $timestamps = false;

}
