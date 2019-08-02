<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    protected $table='t_companybranch';
    protected $primaryKey='id_companybranch';
     protected $fillable = ['id_companydetail', 'companybranch', 'companybranch_addr', 'is_active'];

     public $timestamps = false;
}
