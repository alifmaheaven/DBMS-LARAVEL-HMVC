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

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;


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

            if (!$request->showdata) {
                $pagination = 10;
            } else {
                $pagination = $request->showdata;
            }
            
            $data = Partner::when($request->keyword, function ($query) use ($request) {
                $query->where('id', 'like', "%{$request->keyword}%")
                    ->orWhere('name', 'like', "%{$request->keyword}%");
            })->paginate($pagination);
    
            $data->appends($request->only('keyword'));
    
            return view('partner::partner',['data' => $data, 'showdata' => $pagination]);
        }

       
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
         $input = $request->except('Bodstable','remBodstable','Branchstable','remBranchstable','Divisionstable','remDivisionstable','Partnerstable','remPartnerstable','Productstable','remProductstable','Socmedstable','remSocmedstable','Subsidiarystable','remSubsidiarystable','Histsstable','remHistsstable');
        
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


            return view('partner::editpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists'));
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
            


            return view('partner::editpartner', compact('Detail','Businesstypes',
                                                        'Positions','Segments',
                                                        'Sigmaproducts','Socmedtypes',
                                                        'Bods','Branchs','Divisions','Partners',
                                                        'Products','Socmeds','Subsidiarys','Hists'));
        }
        

    }
        
    }

      
  
}
