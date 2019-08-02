<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyPartner extends Model
{
    protected $table='t_companypartner';
    protected $primaryKey='id_companypartner';
     protected $fillable = ['id_companydetail', 'companypartner_name', 'is_active'];

     public $timestamps = false;
}
