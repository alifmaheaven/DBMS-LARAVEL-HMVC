<?php

namespace Modules\Partner\Http\Controllers;

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
use Modules\Partner\Entities\CompanyCompetitor;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DataTables;
use DB;


// use App\Exports\PartnerAll;
// use App\Exports\Partnerraw;
 use Excel;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','you must login first!!!');
        }
        else{

           
            
            
    
            $data = Partner::select('id','name','street')->get();
            for ($i=0; $i < count($data) ; $i++) { 
               $data[$i]->indexing = $i+1;
               $data[$i]->action = '
               <form action="'.url('/partner/update').'" method="get">
                  
                   <input align="center" type="hidden" name="id_partner" value="'.$data[$i]->id.'">
                   <button style="margin-right: 70px;" class="btn btn-primary btn-round" >Edit</button>
               </form>
               <form action="'.url('/partner/detail').'" method="get">
               <input align="center" type="hidden" name="id_partner" value="'.$data[$i]->id.'">
               <button class="btn btn-round btn-sm" style="background-color: #0345fc;margin-top: -34px;">Detail</button>
                </form>
              ';
           
            }
    
            return view('partner::partner', compact('data'));
        }

       
    }

    public function json()
    {
        $data = Partner::select('id','name','street')->get();
        return Datatables::of($data)
        ->addColumn('action', function ($row) {
            return '<center>
            <form action="/partner/update" method="get">
               
                <input align="center" type="hidden" name="id_partner" value="'.$row->id.'">
                <button style="margin-right: 40px;" class="btn btn-primary btn-round" >Edit</button>
            </form>
            </center>';
            })
        
        ->addIndexColumn()
        ->make(true);
    }

    public function exportcustomer(Request $request, $id)
    {
        $data = Partner::where('id', $id)->select('id','name','street','street2')->first();
        $data2 = CompanyDetail::where('id', $id)->first();
        
        $Businesstypes = DB::table('p_businesstype')->get();
        $Positions = DB::table('p_position')->get();
        $Segments = DB::table('p_segment')->get();
        $Sigmaproducts = DB::table('p_sigmaproduct')->get();
        $Socmedtypes = DB::table('p_socmedtype')->get();

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
        'company_last_am',];

        $value2 = ['id','name','street','street2','company_doe',
        'businesstype', 'number_of_employee', 
        'company_phone', 'company_website', 
        'asset_value', 'company_annual_income', 
        'company_email', 'product_sold_permonth', 
        'company_revenue', 'company_competitor', 
        'segment_industry', 'company_history', 
        'company_num_customer', 'company_culture', 
        'company_workinghours', 'company_budget_permonth', 
        'company_product_needs', 
        'company_last_am',];

        for ($i=0; $i < count($value) ; $i++) { 
           $data[$value[$i]] = $data2[$value[$i]];
           
           if ($data->id_businesstype != null) {
            
            for ($bis=0; $bis < count($Businesstypes); $bis++) { 
                if ($data->id_businesstype == $Businesstypes[$bis]->id_businesstype ) {
                    $data->id_businesstype = $Businesstypes[$bis]->businesstype;
                    $data->businesstype =  $data->id_businesstype;
                    unset($data->id_businesstype);
                }
            }
        }
        if ($data->id_segment != null) {
            
            for ($seg=0; $seg < count($Segments); $seg++) { 
                if ($data->id_segment == $Segments[$seg]->id_segment ) {
                    $data->id_segment = $Segments[$seg]->segment_industry;
                    $data->segment_industry = $data->id_segment;
                    unset($data->id_segment);
                }
            }
        }
        }

      
        $namingvalue = ['data','value'];

        for ($fixoutput=0; $fixoutput < count($value2); $fixoutput++) { 
           
            
            $outputdata[$fixoutput] = array('data' => $value2[$fixoutput], 'value' => $data[$value2[$fixoutput]], );

           

        }

        //tabsnya
        $company_detal_id = CompanyDetail::where('id', $id)->select('id_companydetail')->get();

        if (count($company_detal_id) > 0) {
           //tabvalue
         $Bods = CompanyBod::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
         if (count($Bods)>0) {
            $Bods = CompanyBod::where('id_companydetail',$company_detal_id[0]->id_companydetail)
            ->select('id_companybod', 'companybod_name', 'id_position', 'companybod_birthday', 'companybod_phone', 'companybod_email')
            ->get();
         }
         $Bodsvalue = ['id_companybod', 'companybod_name', 'id_position', 'companybod_birthday', 'companybod_phone', 'companybod_email'];
         if (!count($Bods) > 0) {
             for ($bodfor=0; $bodfor < count($Bodsvalue) ; $bodfor++) { 
                $Bods[0][$Bodsvalue[$bodfor]] = null;
             }
             
          }

        //  $Branchs = CompanyBranch::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Branchs = CompanyBranch::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
         if (count($Branchs)>0) {
            $Branchs = CompanyBranch::where('id_companydetail',$company_detal_id[0]->id_companydetail)
            ->select('id_companybranch',  'companybranch', 'companybranch_addr')
            ->get();
         }
         $Branchsvalue = ['id_companybranch', 'companybranch', 'companybranch_addr'];
         if (!count($Branchs) > 0) {
             for ($branchfor=0; $branchfor < count($Branchsvalue) ; $branchfor++) { 
                $Branchs[0][$Branchsvalue[$branchfor]] = null;
             }
             
          }
        //  $Divisions = CompanyDivision::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Divisions = CompanyDivision::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Divisions)>0) {
           $Divisions = CompanyDivision::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_companydivision', 'companydivision_name')
           ->get();
        }
        $Divisionsvalue = ['id_companydivision', 'companydivision_name'];
        if (!count($Divisions) > 0) {
            $Divisions = array();
            for ($Divisionsfor=0; $Divisionsfor < count($Divisionsvalue) ; $Divisionsfor++) { 
               $Divisions[0][$Divisionsvalue[$Divisionsfor]] = null;
            }
            
         }
        //  $Partners = CompanyPartner::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Partners = CompanyPartner::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Partners)>0) {
           $Partners = CompanyPartner::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_companypartner', 'companypartner_name')
           ->get();
        }
        $Partnersvalue = ['id_companypartner', 'companypartner_name'];
        if (!count($Partners) > 0) {
            $Partners = array();
            for ($Partnersfor=0; $Partnersfor < count($Partnersvalue) ; $Partnersfor++) { 
               $Partners[0][$Partnersvalue[$Partnersfor]] = null;
            }
            
         }
        //  $Products = CompanyProduct::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Products = CompanyProduct::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Products)>0) {
           $Products = CompanyProduct::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_companyproduct', 'id_sigmaproduct')
           ->get();
        }
        $Productsvalue = ['id_companyproduct', 'id_sigmaproduct'];
        if (!count($Products) > 0) {
            $Products = array();
            for ($Productsfor=0; $Productsfor < count($Productsvalue) ; $Productsfor++) { 
               $Products[0][$Productsvalue[$Productsfor]] = null;
            }
            
         }
        //  $Socmeds = CompanySocmed::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Socmeds = CompanySocmed::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Socmeds)>0) {
           $Socmeds = CompanySocmed::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_companysocmed', 'id_socmedtype', 'socmed_name')
           ->get();
        }
        $Socmedsvalue = ['id_companysocmed', 'id_socmedtype', 'socmed_name'];
        if (!count($Socmeds) > 0) {
            $Socmeds = array();
            for ($Socmedsfor=0; $Socmedsfor < count($Socmedsvalue) ; $Socmedsfor++) { 
               $Socmeds[0][$Socmedsvalue[$Socmedsfor]] = null;
            }
            
         }
        //  $Subsidiarys = CompanySubsidiary::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Subsidiarys = CompanySubsidiary::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Subsidiarys)>0) {
           $Subsidiarys = CompanySubsidiary::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_companysubsidiary', 'companysubsidiary_name')
           ->get();
        }
        $Subsidiarysvalue = ['id_companysubsidiary', 'companysubsidiary_name'];
        if (!count($Subsidiarys) > 0) {
            $Subsidiarys = array();
            for ($Subsidiarysfor=0; $Subsidiarysfor < count($Subsidiarysvalue) ; $Subsidiarysfor++) { 
               $Subsidiarys[0][$Subsidiarysvalue[$Subsidiarysfor]] = null;
            }
            
         }
        //  $Hists = HistAm::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        $Hists = HistAm::where('id_companydetail',$company_detal_id[0]->id_companydetail)->get();
        if (count($Hists)>0) {
           $Hists = HistAm::where('id_companydetail',$company_detal_id[0]->id_companydetail)
           ->select('id_hist_am', 'hist_am_name')
           ->get();
        }
        $Histsvalue = ['id_hist_am', 'hist_am_name'];
        if (!count($Hists) > 0) {
            $Hists = array();
            for ($Histsfor=0; $Histsfor < count($Histsvalue) ; $Histsfor++) { 
               $Hists[0][$Histsvalue[$Histsfor]] = null;
            }
            
         }

         for ($BODposision=0; $BODposision < count($Bods); $BODposision++) { 
            for ($positionfor=0; $positionfor < count($Positions); $positionfor++) { 
              if ($Bods[$BODposision]['id_position'] == $Positions[$positionfor]->id_position) {
                $Bods[$BODposision]['id_position'] = $Positions[$positionfor]->position_name;
               $Bods[$BODposision]->position_name =  $Bods[$BODposision]['id_position'];
                unset($Bods[$BODposision]['id_position']);
              }
            }
         }
         for ($Productposision=0; $Productposision < count($Products); $Productposision++) { 
            for ($Productfor=0; $Productfor < count($Sigmaproducts); $Productfor++) { 
              if ($Products[$Productposision]['id_sigmaproduct'] == $Sigmaproducts[$Productfor]->id_sigmaproduct) {
                $Products[$Productposision]['id_sigmaproduct'] = $Sigmaproducts[$Productfor]->sigmaproduct_name;
               $Products[$Productposision]->sigmaproduct_name =  $Products[$Productposision]['id_sigmaproduct'];
                unset($Products[$Productposision]['id_sigmaproduct']);
              }
            }
         }
         
         for ($Socmedposision=0; $Socmedposision < count($Socmeds); $Socmedposision++) { 
            for ($Socmedfor=0; $Socmedfor < count($Socmedtypes); $Socmedfor++) { 
              if ($Socmeds[$Socmedposision]['id_socmedtype'] == $Socmedtypes[$Socmedfor]->id_socmedtype) {
                $Socmeds[$Socmedposision]['id_socmedtype'] = $Socmedtypes[$Socmedfor]->socmedtype_name;
               $Socmeds[$Socmedposision]->socmedtype_name =  $Socmeds[$Socmedposision]->id_socmedtype;
                unset($Socmeds[$Socmedposision]['id_socmedtype']);
              }
            }
         }





        }else {
            $Bods = [];
            $Bodsvalue = ['id_companybod', 'companybod_name', 'id_position', 'companybod_birthday', 'companybod_phone', 'companybod_email'];
         if (!count($Bods) > 0) {
             for ($bodfor=0; $bodfor < count($Bodsvalue) ; $bodfor++) { 
                $Bods[0][$Bodsvalue[$bodfor]] = null;
             }
             
          }
            $Branchs = [];
            $Branchsvalue = ['id_companybranch', 'companybranch', 'companybranch_addr'];
            if (!count($Branchs) > 0) {
                for ($branchfor=0; $branchfor < count($Branchsvalue) ; $branchfor++) { 
                   $Branchs[0][$Branchsvalue[$branchfor]] = null;
                }
                
             }
            $Divisions = [];
            $Divisionsvalue = ['id_companydivision', 'companydivision_name'];
            if (!count($Divisions) > 0) {
                for ($Divisionsfor=0; $Divisionsfor < count($Divisionsvalue) ; $Divisionsfor++) { 
                   $Divisions[0][$Divisionsvalue[$Divisionsfor]] = null;
                }
                
             }
            $Partners = [];
            $Partnersvalue = ['id_companypartner', 'companypartner_name'];
            if (!count($Partners) > 0) {
                for ($Partnersfor=0; $Partnersfor < count($Partnersvalue) ; $Partnersfor++) { 
                   $Partners[0][$Partnersvalue[$Partnersfor]] = null;
                }
                
             }
            $Products = [];
            $Productsvalue = ['id_companyproduct', 'id_sigmaproduct'];
            if (!count($Products) > 0) {
                for ($Productsfor=0; $Productsfor < count($Productsvalue) ; $Productsfor++) { 
                   $Products[0][$Productsvalue[$Productsfor]] = null;
                }
                
             }
            $Socmeds = [];
            $Socmedsvalue = ['id_companysocmed', 'id_socmedtype', 'socmed_name'];
            if (!count($Socmeds) > 0) {
                for ($Socmedsfor=0; $Socmedsfor < count($Socmedsvalue) ; $Socmedsfor++) { 
                   $Socmeds[0][$Socmedsvalue[$Socmedsfor]] = null;
                }
                
             }
            $Subsidiarys = [];
            $Subsidiarysvalue = ['id_companysubsidiary', 'companysubsidiary_name'];
            if (!count($Subsidiarys) > 0) {
                for ($Subsidiarysfor=0; $Subsidiarysfor < count($Subsidiarysvalue) ; $Subsidiarysfor++) { 
                   $Subsidiarys[0][$Subsidiarysvalue[$Subsidiarysfor]] = null;
                }

             }
            $Hists = [];
            $Histsvalue = ['id_hist_am', 'hist_am_name'];
            if (!count($Hists) > 0) {
                for ($Histsfor=0; $Histsfor < count($Histsvalue) ; $Histsfor++) { 
                   $Hists[0][$Histsvalue[$Histsfor]] = null;
                }
                
             }
    
        }

        
       


       // return response()->json($Socmeds);


        return Excel::create('DBMS-Detail-Customer:'.$id, function($excel) use ($outputdata, $Bods,$Branchs,$Divisions,$Partners,$Products,$Socmeds,$Subsidiarys,$Hists) {
            
           
            $excel->sheet('DataPartner', function($sheet) use ($outputdata)
            {
                $sheet->fromArray($outputdata);
               
                  
               
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
               
            });

            $excel->sheet('BOD', function($sheet) use ($Bods)
            {
                $sheet->fromArray($Bods);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });
            $excel->sheet('Branch', function($sheet) use ($Branchs)
            {
                $sheet->fromArray($Branchs);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });

            $excel->sheet('Division', function($sheet) use ($Divisions)
            {
                $sheet->fromArray($Divisions);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });

            $excel->sheet('Partner', function($sheet) use ($Partners)
            {
                $sheet->fromArray($Partners);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });

            $excel->sheet('Product', function($sheet) use ($Products)
            {
                $sheet->fromArray($Products);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });

            $excel->sheet('Socmed', function($sheet) use ($Socmeds)
            {
                $sheet->fromArray($Socmeds);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });


                

            });

            $excel->sheet('Subsidiary', function($sheet) use ($Subsidiarys)
            {
                $sheet->fromArray($Subsidiarys);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });
            
            $excel->sheet('Hist', function($sheet) use ($Hists)
            {
                $sheet->fromArray($Hists);
                $sheet->setPageMargin(0.25);
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#ffffccee');
                    $row->setFont(array(
                        'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true,
                    ));
                   
                });
            });
            
            
    
        })->download('xls');
        

        

    }
    
    public function exportAllCustomer()
    {
    $data = Partner::select('id','name','street','street2')->get();
    $data2 = CompanyDetail::get();

    $Businesstypes = DB::table('p_businesstype')->get();
    $Positions = DB::table('p_position')->get();
    $Segments = DB::table('p_segment')->get();
    $Sigmaproducts = DB::table('p_sigmaproduct')->get();
    $Socmedtypes = DB::table('p_socmedtype')->get();
    
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
    'company_last_am',];

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

        if ($data[$i]->id_businesstype != null) {
            for ($bis=0; $bis < count($Businesstypes); $bis++) { 
                if ($data[$i]->id_businesstype == $Businesstypes[$bis]->id_businesstype ) {
                    $data[$i]->id_businesstype = $Businesstypes[$bis]->businesstype;
                    $data[$i]->businesstype =  $data[$i]->id_businesstype;
                    unset($data[$i]->id_businesstype);
                }
            }
        }
        if ($data[$i]->id_segment != null) {
            
            for ($seg=0; $seg < count($Segments); $seg++) { 
                if ($data[$i]->id_segment == $Segments[$seg]->id_segment ) {
                    $data[$i]->id_segment = $Segments[$seg]->segment_industry;
                    $data[$i]->segment_industry = $data[$i]->id_segment;
                    unset($data[$i]->id_segment);
                }
            }
        }
        
    }

    

    return Excel::create('DBMS-detail-allcustomer', function($excel) use ($data) {
        $excel->sheet('allData', function($sheet) use ($data)
        {
            $sheet->fromArray($data, null, 'A1', false, false);
            $sheet->prependRow(1, array(
                'id','name','street','street2',
                'company_doe',
                'id_businesstype', 'number_of_employee', 
                'company_phone', 'company_website', 
                'asset_value', 'company_annual_income', 
                'company_email', 'product_sold_permonth', 
                'company_revenue', 'company_competitor', 
                'id_segment', 'company_history', 
                'company_num_customer', 'company_culture', 
                'company_workinghours', 'company_budget_permonth', 
                'company_product_needs', 
                'company_last_am',
            ));
           

            //$sheet->setPageMargin(0.25);
            $sheet->row(1, function($row) {
               // call cell manipulation methods
               $row->setBackground('#ffffccee');
               //$row->setBorder
                $row->setFont(array(
                    'family'     => 'Calibri',
                    'size'       => '12',
                    'bold'       =>  true,
                ));
               
            });

           
            $sheet->setBorder('A1:W22', 'thin', 'thin', 'thin', 'thin');
           
          
            

        });

    })->download('xls');
    
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */

   
    public function add_res_partner(Request $request)
    {
       
       
      
        $inputjudul = ["id", "name", "company_id", "display_name", "date", "title", "parent_id", "ref", "lang", "tz", "user_id", "vat", "website", "comment", "credit_limit", "barcode", "active", "customer", "supplier", "employee", "function", "type", "street", "street2", "zip", "city", "state_id", "country_id", "email", "phone", "mobile", "is_company", "industry_id", "color", "partner_share", "commercial_partner_id", "commercial_partner_country_id", "commercial_company_name", "company_name", "create_uid", "create_date", "write_uid", "write_date", "message_bounce", "opt_out", "activity_date_deadline", "message_last_post", "signup_token", "signup_type", "signup_expiration", "calendar_last_notif_ack", "team_id", "debit_limit", "last_time_entries_checked", "invoice_warn", "invoice_warn_msg", "sale_warn", "sale_warn_msg", "name2", "customer_id", "sap_customer_id", "customer_code", "npwp", "npwp_address1", "npwp_address2", "npwp_address3", "wapu_id_moved0", "status_id", "no_sppkp", "tgl_sppkp", "fasilitas_perpajakan", "contact_person_pajak", "telp_tax", "email_tax", "kd_trans", "log", "affiliation_id", "segment_industry_id", "sub_segment_industry_id", "picking_warn", "picking_warn_msg", "wapu_id", "is_channel", "street3", "subsidiary", "mis_customer_code", "kelurahan_id", "kecamatan_id", "kota_id", "event_created", "mis_country", "mis_city", "mis_active", "sap_active", "mis_supplier_code", "customer_pic_title_moved0", "customer_pic_function", "customer_pic_email", "customer_pic_phone", "customer_pic_mobile", "customer_pic_comment", "default_child", "customer_pic_name", "customer_pic_title", "namename"];
        
        $data = array();

        for ($i=0; $i < count($request->id); $i++) { 
            for ($xxx=0; $xxx < count($inputjudul); $xxx++) { 
                if (!$request[$inputjudul[$xxx]][$i] == null) {
                    $data[$i][$inputjudul[$xxx]] = $request[$inputjudul[$xxx]][$i];
                } else {
                    $data[$i][$inputjudul[$xxx]] = null;
                }
                
            }
        }

       
        for ($L=0; $L < count($data) ; $L++) {
            
        
        if (!$data[$L]['id']) {
            return response()->json([
                "status" => false,
                "message" => "id mu mana",
                "data" => null
            ]);
        }

        

        $getData= Partner::where('id',$data[$L]['id'])->first();

        if (count($getData) > 0) {
           
            if($getData->update($data[$L])){
               
              }
              else{
                return response()->json([
                    "status" => false,
                    "message" => "gagal update",
                    "data" => $getData
                ]);
              }
            
        } else {

            $input = $data[$L]; 
            $user = Partner::create($input); 
            if ($user) {
         
            }  else {
                return response()->json([
                    "status" => false,
                    "message" => "gagal input",
                    "data" => $input
                ]);
            }
           
        } 
           
        }

        return response()->json([
            "status" => true,
            "message" => "berhasil input",
            "data" => $data
        ]);


        
    }

    public function add_datadetail(Request $request)
    {
         $input = $request->except('Bodstable','remBodstable','Branchstable','remBranchstable','Divisionstable','remDivisionstable','Partnerstable','remPartnerstable','Productstable','remProductstable','Socmedstable','remSocmedstable','Subsidiarystable','remSubsidiarystable','Histsstable','remHistsstable','Competitorsstable','remCompetitorsstable');
        
        $formatchanging=['asset_value','company_annual_income','company_budget_permonth','company_num_customer','company_revenue','number_of_employee','product_sold_permonth'];

        for ($i=0; $i < count( $formatchanging) ; $i++) { 
            $input[$formatchanging[$i]] = str_replace("Rp. ", "", $input[$formatchanging[$i]]);
            $input[$formatchanging[$i]] = str_replace(".", "", $input[$formatchanging[$i]]);
        }
        
     
        
        $getData= CompanyDetail::where('id',$input["id"])->first();


        if (count($getData) > 0) {

            if ($getData->update($input)) {

                //----------------Bods--------------------
                //apa bila ada yang diremove
                $removeBods = $request->remBodstable;
                for ($j=0; $j < count($removeBods) ; $j++) { 
                    if ($removeBods[$j] !== null) {
                       CompanyBod::where('id_companybod', $removeBods[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputBods = $request->Bodstable;
                 for ($i=0; $i < count($inputBods) ; $i++) {
                     
                    if ( $inputBods[$i]["id_companydetail"] == null) {
                        $inputBods[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companybod = CompanyBod::create($inputBods[$i]); 
                    } else{
                        $companybod = CompanyBod::where('id_companybod', $inputBods[$i]["id_companybod"])->update($inputBods[$i]); 
                    }
                 }



                 //--------------Branchs----------------------
                //apa bila ada yang diremove
                $removeBranchs = $request->remBranchstable;
                for ($j=0; $j < count($removeBranchs) ; $j++) { 
                    if ($removeBranchs[$j] !== null) {
                       CompanyBranch::where('id_companybranch', $removeBranchs[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputBranchs = $request->Branchstable;
                 for ($i=0; $i < count($inputBranchs) ; $i++) {
                     
                    if ( $inputBranchs[$i]["id_companydetail"] == null) {
                        $inputBranchs[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyBranch = CompanyBranch::create($inputBranchs[$i]); 
                    } else{
                        $companyBranch = CompanyBranch::where('id_companybranch', $inputBranchs[$i]["id_companybranch"])->update($inputBranchs[$i]); 
                    }
                 }

                    //--------------Divisions----------------------
                //apa bila ada yang diremove
                $removeDivisions = $request->remDivisionstable;
                for ($j=0; $j < count($removeDivisions) ; $j++) { 
                    if ($removeDivisions[$j] !== null) {
                       CompanyDivision::where('id_companydivision', $removeDivisions[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputDivisions = $request->Divisionstable;
                 for ($i=0; $i < count($inputDivisions) ; $i++) {
                     
                    if ( $inputDivisions[$i]["id_companydetail"] == null) {
                        $inputDivisions[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyDivision = CompanyDivision::create($inputDivisions[$i]); 
                    } else{
                        $companyDivision = CompanyDivision::where('id_companydivision', $inputDivisions[$i]["id_companydivision"])->update($inputDivisions[$i]); 
                    }
                 }

                //--------------Partners----------------------
                //apa bila ada yang diremove
                $removePartners = $request->remPartnerstable;
                for ($j=0; $j < count($removePartners) ; $j++) { 
                    if ($removePartners[$j] !== null) {
                       CompanyPartner::where('id_companypartner', $removePartners[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputPartners = $request->Partnerstable;
                 for ($i=0; $i < count($inputPartners) ; $i++) {
                     
                    if ( $inputPartners[$i]["id_companydetail"] == null) {
                        $inputPartners[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyPartner = CompanyPartner::create($inputPartners[$i]); 
                    } else{
                        $companyPartner = CompanyPartner::where('id_companypartner', $inputPartners[$i]["id_companypartner"])->update($inputPartners[$i]); 
                    }
                 }

                 //--------------Products----------------------
                //apa bila ada yang diremove
                $removeProducts = $request->remProductstable;
                for ($j=0; $j < count($removeProducts) ; $j++) { 
                    if ($removeProducts[$j] !== null) {
                       CompanyProduct::where('id_companyproduct', $removeProducts[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputProducts = $request->Productstable;
                 for ($i=0; $i < count($inputProducts) ; $i++) {
                     
                    if ( $inputProducts[$i]["id_companydetail"] == null) {
                        $inputProducts[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyProduct = CompanyProduct::create($inputProducts[$i]); 
                    } else{
                        $companyProduct = CompanyProduct::where('id_companyproduct', $inputProducts[$i]["id_companyproduct"])->update($inputProducts[$i]); 
                    }
                 }

                 //--------------Socmeds----------------------
                //apa bila ada yang diremove
                $removeSocmeds = $request->remSocmedstable;
                for ($j=0; $j < count($removeSocmeds) ; $j++) { 
                    if ($removeSocmeds[$j] !== null) {
                       CompanySocmed::where('id_companysocmed', $removeSocmeds[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputSocmeds = $request->Socmedstable;
                 for ($i=0; $i < count($inputSocmeds) ; $i++) {
                     
                    if ( $inputSocmeds[$i]["id_companydetail"] == null) {
                        $inputSocmeds[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companySocmed = CompanySocmed::create($inputSocmeds[$i]); 
                    } else{
                        $companySocmed = CompanySocmed::where('id_companysocmed', $inputSocmeds[$i]["id_companysocmed"])->update($inputSocmeds[$i]); 
                    }
                 }

                  //--------------Subsidiarys----------------------
                //apa bila ada yang diremove
                $removeSubsidiarys = $request->remSubsidiarystable;
                for ($j=0; $j < count($removeSubsidiarys) ; $j++) { 
                    if ($removeSubsidiarys[$j] !== null) {
                       CompanySubsidiary::where('id_companysubsidiary', $removeSubsidiarys[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputSubsidiarys = $request->Subsidiarystable;
                 for ($i=0; $i < count($inputSubsidiarys) ; $i++) {
                     
                    if ( $inputSubsidiarys[$i]["id_companydetail"] == null) {
                        $inputSubsidiarys[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companySubsidiary = CompanySubsidiary::create($inputSubsidiarys[$i]); 
                    } else{
                        $companySubsidiary = CompanySubsidiary::where('id_companysubsidiary', $inputSubsidiarys[$i]["id_companysubsidiary"])->update($inputSubsidiarys[$i]); 
                    }
                 }

                  //--------------HistAms----------------------
                //apa bila ada yang diremove
                $removeHistAms = $request->remHistsstable;
                for ($j=0; $j < count($removeHistAms) ; $j++) { 
                    if ($removeHistAms[$j] !== null) {
                       HistAm::where('id_hist_am', $removeHistAms[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputHistAms = $request->Histsstable;
                 for ($i=0; $i < count($inputHistAms) ; $i++) {
                     
                    if ( $inputHistAms[$i]["id_companydetail"] == null) {
                        $inputHistAms[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyHistAm = HistAm::create($inputHistAms[$i]); 
                    } else{
                        $companyHistAm = HistAm::where('id_hist_am', $inputHistAms[$i]["id_hist_am"])->update($inputHistAms[$i]); 
                    }
                 }

                //--------------CompanyCompetitors----------------------
                //apa bila ada yang diremove
                $removeCompetitors = $request->remCompetitorsstable;
                for ($j=0; $j < count($removeCompetitors) ; $j++) { 
                    if ($removeCompetitors[$j] !== null) {
                        CompanyCompetitor::where('id_companycompetitor', $removeCompetitors[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputCompetitors = $request->Competitorsstable;
                 for ($i=0; $i < count($inputCompetitors) ; $i++) {
                     
                    if ( $inputCompetitors[$i]["id_companydetail"] == null) {
                        $inputCompetitors[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyCompetitor = CompanyCompetitor::create($inputCompetitors[$i]); 
                    } else{
                        $companyCompetitor = CompanyCompetitor::where('id_companycompetitor', $inputCompetitors[$i]["id_companycompetitor"])->update($inputCompetitors[$i]); 
                    }
                 }




                 return response()->json([
                    "status" => true,
                    "message" => "data has been update!!!",
                    "url" => '/partner'
                ]);
                 
               
            }


        } else {
            $user = CompanyDetail::create($input); 

            if ($user) {


                 //----------------Bods--------------------
                //apa bila ada yang diremove
                $removeBods = $request->remBodstable;
                for ($j=0; $j < count($removeBods) ; $j++) { 
                    if ($removeBods[$j] !== null) {
                       CompanyBod::where('id_companybod', $removeBods[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputBods = $request->Bodstable;
                 for ($i=0; $i < count($inputBods) ; $i++) {
                     
                    if ( $inputBods[$i]["id_companydetail"] == null) {
                        $inputBods[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companybod = CompanyBod::create($inputBods[$i]); 
                    } else{
                        $companybod = CompanyBod::where('id_companybod', $inputBods[$i]["id_companybod"])->update($inputBods[$i]); 
                    }
                 }



                 //--------------Branchs----------------------
                //apa bila ada yang diremove
                $removeBranchs = $request->remBranchstable;
                for ($j=0; $j < count($removeBranchs) ; $j++) { 
                    if ($removeBranchs[$j] !== null) {
                       CompanyBranch::where('id_companybranch', $removeBranchs[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputBranchs = $request->Branchstable;
                 for ($i=0; $i < count($inputBranchs) ; $i++) {
                     
                    if ( $inputBranchs[$i]["id_companydetail"] == null) {
                        $inputBranchs[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyBranch = CompanyBranch::create($inputBranchs[$i]); 
                    } else{
                        $companyBranch = CompanyBranch::where('id_companybranch', $inputBranchs[$i]["id_companybranch"])->update($inputBranchs[$i]); 
                    }
                 }

                    //--------------Divisions----------------------
                //apa bila ada yang diremove
                $removeDivisions = $request->remDivisionstable;
                for ($j=0; $j < count($removeDivisions) ; $j++) { 
                    if ($removeDivisions[$j] !== null) {
                       CompanyDivision::where('id_companydivision', $removeDivisions[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputDivisions = $request->Divisionstable;
                 for ($i=0; $i < count($inputDivisions) ; $i++) {
                     
                    if ( $inputDivisions[$i]["id_companydetail"] == null) {
                        $inputDivisions[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyDivision = CompanyDivision::create($inputDivisions[$i]); 
                    } else{
                        $companyDivision = CompanyDivision::where('id_companydivision', $inputDivisions[$i]["id_companydivision"])->update($inputDivisions[$i]); 
                    }
                 }

                //--------------Partners----------------------
                //apa bila ada yang diremove
                $removePartners = $request->remPartnerstable;
                for ($j=0; $j < count($removePartners) ; $j++) { 
                    if ($removePartners[$j] !== null) {
                       CompanyPartner::where('id_companypartner', $removePartners[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputPartners = $request->Partnerstable;
                 for ($i=0; $i < count($inputPartners) ; $i++) {
                     
                    if ( $inputPartners[$i]["id_companydetail"] == null) {
                        $inputPartners[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyPartner = CompanyPartner::create($inputPartners[$i]); 
                    } else{
                        $companyPartner = CompanyPartner::where('id_companypartner', $inputPartners[$i]["id_companypartner"])->update($inputPartners[$i]); 
                    }
                 }

                 //--------------Products----------------------
                //apa bila ada yang diremove
                $removeProducts = $request->remProductstable;
                for ($j=0; $j < count($removeProducts) ; $j++) { 
                    if ($removeProducts[$j] !== null) {
                       CompanyProduct::where('id_companyproduct', $removeProducts[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputProducts = $request->Productstable;
                 for ($i=0; $i < count($inputProducts) ; $i++) {
                     
                    if ( $inputProducts[$i]["id_companydetail"] == null) {
                        $inputProducts[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyProduct = CompanyProduct::create($inputProducts[$i]); 
                    } else{
                        $companyProduct = CompanyProduct::where('id_companyproduct', $inputProducts[$i]["id_companyproduct"])->update($inputProducts[$i]); 
                    }
                 }

                 //--------------Socmeds----------------------
                //apa bila ada yang diremove
                $removeSocmeds = $request->remSocmedstable;
                for ($j=0; $j < count($removeSocmeds) ; $j++) { 
                    if ($removeSocmeds[$j] !== null) {
                       CompanySocmed::where('id_companysocmed', $removeSocmeds[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputSocmeds = $request->Socmedstable;
                 for ($i=0; $i < count($inputSocmeds) ; $i++) {
                     
                    if ( $inputSocmeds[$i]["id_companydetail"] == null) {
                        $inputSocmeds[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companySocmed = CompanySocmed::create($inputSocmeds[$i]); 
                    } else{
                        $companySocmed = CompanySocmed::where('id_companysocmed', $inputSocmeds[$i]["id_companysocmed"])->update($inputSocmeds[$i]); 
                    }
                 }

                  //--------------Subsidiarys----------------------
                //apa bila ada yang diremove
                $removeSubsidiarys = $request->remSubsidiarystable;
                for ($j=0; $j < count($removeSubsidiarys) ; $j++) { 
                    if ($removeSubsidiarys[$j] !== null) {
                       CompanySubsidiary::where('id_companysubsidiary', $removeSubsidiarys[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputSubsidiarys = $request->Subsidiarystable;
                 for ($i=0; $i < count($inputSubsidiarys) ; $i++) {
                     
                    if ( $inputSubsidiarys[$i]["id_companydetail"] == null) {
                        $inputSubsidiarys[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companySubsidiary = CompanySubsidiary::create($inputSubsidiarys[$i]); 
                    } else{
                        $companySubsidiary = CompanySubsidiary::where('id_companysubsidiary', $inputSubsidiarys[$i]["id_companysubsidiary"])->update($inputSubsidiarys[$i]); 
                    }
                 }

                  //--------------HistAms----------------------
                //apa bila ada yang diremove
                $removeHistAms = $request->remHistsstable;
                for ($j=0; $j < count($removeHistAms) ; $j++) { 
                    if ($removeHistAms[$j] !== null) {
                       HistAm::where('id_hist_am', $removeHistAms[$j])->delete();
                        
                    }
                }

                //apa bila ingin update ataupun delete
                $getCompanyDetail= CompanyDetail::where('id',$input["id"])->first();
                $inputHistAms = $request->Histsstable;
                 for ($i=0; $i < count($inputHistAms) ; $i++) {
                     
                    if ( $inputHistAms[$i]["id_companydetail"] == null) {
                        $inputHistAms[$i]["id_companydetail"] =  $getCompanyDetail->id_companydetail;
                        $companyHistAm = HistAm::create($inputHistAms[$i]); 
                    } else{
                        $companyHistAm = HistAm::where('id_hist_am', $inputHistAms[$i]["id_hist_am"])->update($inputHistAms[$i]); 
                    }
                 }
                 
             
                 return response()->json([
                    "status" => true,
                    "message" => "data has been Created!!!",
                    "url" => '/partner'
                ]);
               
                
                
            }
        }
        
    }

   
    public function getres_partner(Request $request){
        if(!Session::get('login')){
            return redirect('login')->with('alert','you must login first!!!');
        }
        else{

        $id_partner = $request->id_partner;
        
        $getData= CompanyDetail::where('id',$id_partner)->get();

        if (count($getData) > 0) {

            // when data there is
            $Detail = CompanyDetail::join('res_partner','res_partner.id','=','t_companydetail.id')
            ->where('res_partner.id',$id_partner)
            ->first();

           
             //dropdown
             $Businesstypes = DB::table('p_businesstype')->get();
             $Positions = DB::table('p_position')->get();
             $Segments = DB::table('p_segment')->get();
             $Sigmaproducts = DB::table('p_sigmaproduct')->get();
             $Socmedtypes = DB::table('p_socmedtype')->get();
 
             //tabvalue
            $Bods = CompanyBod::where('id_companydetail',$Detail->id_companydetail)->get();
            $Branchs = CompanyBranch::where('id_companydetail',$Detail->id_companydetail)->get();
            $Divisions = CompanyDivision::where('id_companydetail',$Detail->id_companydetail)->get();
            $Partners = CompanyPartner::where('id_companydetail',$Detail->id_companydetail)->get();
            $Products = CompanyProduct::where('id_companydetail',$Detail->id_companydetail)->get();
            $Socmeds = CompanySocmed::where('id_companydetail',$Detail->id_companydetail)->get();
            $Subsidiarys = CompanySubsidiary::where('id_companydetail',$Detail->id_companydetail)->get();
            $Hists = HistAm::where('id_companydetail',$Detail->id_companydetail)->get();
            $Competitors = CompanyCompetitor::where('id_companydetail',$Detail->id_companydetail)->get();


            return view('partner::editpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists','Competitors'));
        } else {

            // when data is nothing
            $Detail = Partner::where('id',$id_partner)->first();
            
            //dropdown
            $Businesstypes = DB::table('p_businesstype')->get();
            $Positions = DB::table('p_position')->get();
            $Segments = DB::table('p_segment')->get();
            $Sigmaproducts = DB::table('p_sigmaproduct')->get();
            $Socmedtypes = DB::table('p_socmedtype')->get();

            //tabvalue
            $Bods = [];
            $Branchs = [];
            $Divisions = [];
            $Partners = [];
            $Products = [];
            $Socmeds = [];
            $Subsidiarys = [];
            $Hists=[];
            $Competitors = [];
            


            return view('partner::editpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists','Competitors'));
        }
        

    }
        
    }

    public function getdetailres_partner(Request $request){
        if(!Session::get('login')){
            return redirect('login')->with('alert','you must login first!!!');
        }
        else{

        $id_partner = $request->id_partner;
        
        $getData= CompanyDetail::where('id',$id_partner)->get();

        if (count($getData) > 0) {

            // when data there is
            $Detail = CompanyDetail::join('res_partner','res_partner.id','=','t_companydetail.id')
            ->where('res_partner.id',$id_partner)
            ->first();

           
             //dropdown
             $Businesstypes = DB::table('p_businesstype')->get();
             $Positions = DB::table('p_position')->get();
             $Segments = DB::table('p_segment')->get();
             $Sigmaproducts = DB::table('p_sigmaproduct')->get();
             $Socmedtypes = DB::table('p_socmedtype')->get();
 
             //tabvalue
            $Bods = CompanyBod::where('id_companydetail',$Detail->id_companydetail)->get();
            $Branchs = CompanyBranch::where('id_companydetail',$Detail->id_companydetail)->get();
            $Divisions = CompanyDivision::where('id_companydetail',$Detail->id_companydetail)->get();
            $Partners = CompanyPartner::where('id_companydetail',$Detail->id_companydetail)->get();
            $Products = CompanyProduct::where('id_companydetail',$Detail->id_companydetail)->get();
            $Socmeds = CompanySocmed::where('id_companydetail',$Detail->id_companydetail)->get();
            $Subsidiarys = CompanySubsidiary::where('id_companydetail',$Detail->id_companydetail)->get();
            $Hists = HistAm::where('id_companydetail',$Detail->id_companydetail)->get();
            $Competitors = CompanyCompetitor::where('id_companydetail',$Detail->id_companydetail)->get();


            return view('partner::detailpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists','Competitors'));
        } else {

            // when data is nothing
            $Detail = Partner::where('id',$id_partner)->first();
            
            //dropdown
            $Businesstypes = DB::table('p_businesstype')->get();
            $Positions = DB::table('p_position')->get();
            $Segments = DB::table('p_segment')->get();
            $Sigmaproducts = DB::table('p_sigmaproduct')->get();
            $Socmedtypes = DB::table('p_socmedtype')->get();

            //tabvalue
            $Bods = [];
            $Branchs = [];
            $Divisions = [];
            $Partners = [];
            $Products = [];
            $Socmeds = [];
            $Subsidiarys = [];
            $Hists = [];
            $Competitors = [];
            


            return view('partner::detailpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists','Competitors'));
        }
        

    }
        
    }
   
      
}
