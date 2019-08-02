<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanySubsidiary extends Model
{
    protected $table='t_companysubsidiary';
    protected $primaryKey='id_companysubsidiary';
     protected $fillable = [ 'id_companydetail', 'companysubsidiary_name', 'is_active'];

     public $timestamps = false;
}
