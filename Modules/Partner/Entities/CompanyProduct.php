<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyProduct extends Model
{
    protected $table='t_companyproduct';
    protected $primaryKey='id_companyproduct';
     protected $fillable = ['id_companydetail', 'id_sigmaproduct', 'is_active'];

     public $timestamps = false;
}
