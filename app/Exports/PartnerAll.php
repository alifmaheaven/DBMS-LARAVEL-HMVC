<?php

namespace App\Exports;
use Modules\Partner\Entities\Partner;
use Modules\Partner\Entities\CompanyDetail;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PartnerAll implements FromCollection, WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
  

    public function collection()
    {

        $data = Partner::select('id','name','street','street2')->get();
        $data2 = CompanyDetail::get();
        
        $value = ['company_doe',
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

       


        for ($a=0; $a < count($data) ; $a++) { 
            for ($b=0; $b < count($value)  ; $b++) { 
                $data[$a][$value[$b]] = ""  ;  
            }
        }

        for ($i=0; $i < count($data) ; $i++) {
            for ($j=0; $j < count($data2) ; $j++) { 
               if ($data[$i]->id == $data2[$j]->id) {
                 for ($k=0; $k < count($value) ; $k++) {
                     $data[$i][$value[$k]] = $data2[$j][$value[$k]];
                 }

               }
            } 
            
        }

      
        
        //$data ini datanya yang sudah diolah di for
        return $data;

    }

    public function headings(): array

    {

        return [

            'id','name','street','street2', 'company_doe',
            'id_businesstype', 'number_of_employee', 
            'company_phone', 'company_website', 
            'asset_value', 'company_annual_income', 
            'company_email', 'product_sold_permonth', 
            'company_revenue', 'company_competitor', 
            'id_segment', 'company_history', 
            'company_num_customer', 'company_culture', 
            'company_workinghours', 'company_budget_permonth', 
            'company_product_needs', 
            'company_last_am', 'is_active',
        ];

    }
}
