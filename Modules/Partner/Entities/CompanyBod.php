<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyBod extends Model
{
   
    protected $table='t_companybod';
    protected $primaryKey='id_companybod';
     protected $fillable = ['id_companydetail',
                             'companybod_name', 'id_position', 
                             'companybod_birthday', 'companybod_phone', 
                             'companybod_email', 'is_active'];

     public $timestamps = false;
}
