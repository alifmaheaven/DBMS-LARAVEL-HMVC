<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyCompetitor extends Model
{
    protected $table='t_companycompetitor';
    protected $primaryKey='id_companycompetitor';
     protected $fillable = [ 'id_companydetail', 'competitor_name', 'is_active'];

     public $timestamps = false;
}
