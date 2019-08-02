<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $table='t_companydetail';
    protected $primaryKey='id_companydetail';
     protected $fillable = [ 'id', 'company_doe',
                             'id_businesstype', 'number_of_employee', 
                             'company_phone', 'company_website', 
                             'asset_value', 'company_annual_income', 
                             'company_email', 'product_sold_permonth', 
                             'company_revenue', 'company_competitor', 
                             'id_segment', 'company_history', 
                             'company_num_customer', 'company_culture', 
                             'company_workinghours', 'company_budget_permonth', 
                             'company_product_needs', 
                             'company_last_am', 'is_active',];

     public $timestamps = false;
}
