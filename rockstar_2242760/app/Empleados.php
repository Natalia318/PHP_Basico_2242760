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
    public function cliente(){
        return $this->hasMany('App\Customer', 'SupportRepId');
    }
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId',
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId'
                                    );
    }
}
