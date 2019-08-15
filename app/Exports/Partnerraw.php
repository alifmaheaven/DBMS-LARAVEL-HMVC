<?php

namespace App\Exports;

use Modules\Partner\Entities\Partner;
use Modules\Partner\Entities\CompanyDetail;
use Modules\Partner\Entities\CompanyBod;
use Modules\Partner\Entities\CompanyBranch;
use Modules\Partner\Entities\CompanyDivision;
use Modules\Partner\Entities\CompanyPartner;
use Modules\Partner\Entities\CompanyProduct;
use Modules\Partner\Entities\CompanySocmed;
use Modules\Partner\Entities\CompanySubsidiary;
use Modules\Partner\Entities\HistAm;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


use Maatwebsite\Excel\Concerns\FromCollection;

class Partnerraw implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Partner::where('id', $this->id)->get();
        
    }
}
