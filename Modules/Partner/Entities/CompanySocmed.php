<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanySocmed extends Model
{
    protected $table='t_companysocmed';
    protected $primaryKey='id_companysocmed';
     protected $fillable = [ 'id_companydetail', 'id_socmedtype', 'socmed_name', 'is_active'];

     public $timestamps = false;
}
