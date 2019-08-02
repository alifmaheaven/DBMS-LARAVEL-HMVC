<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyDivision extends Model
{
    protected $table='t_companydivision';
    protected $primaryKey='id_companydivision';
     protected $fillable = [ 'id_companydetail', 'companydivision_name', 'is_active'];

     public $timestamps = false;
}
