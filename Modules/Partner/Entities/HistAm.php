<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class HistAm extends Model
{
    protected $table='t_hist_am';
    protected $primaryKey='id_hist_am';
    protected $fillable = ['id_companydetail', 'hist_am_name', 'is_active'];
    public $timestamps = false;
}
