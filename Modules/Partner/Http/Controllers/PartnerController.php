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

        $id = $request['id'];
        if (!$id) {
            return response()->json([
                "status" => false,
                "message" => "id mu mana",
                "data" => null
            ]);
        }

        $getData= Partner::where('id',$id)->first();

        if (count($getData) > 0) {
           
            if($getData->update($request->all())){
                return response()->json([
                    "status" => true,
                    "message" => "berhasil update",
                    "data" => $getData
                ]);
              }
              else{
                return response()->json([
                    "status" => false,
                    "message" => "gagal update",
                    "data" => $getData
                ]);
              }
            
        } else {

            $input = $request->all(); 
            $user = Partner::create($input); 
            if ($user) {
            return response()->json([
                "status" => true,
                "message" => "berhasil input",
                "data" => $input
            ]);
            }  else {
                return response()->json([
                    "status" => false,
                    "message" => "gagal input",
                    "data" => $input
                ]);
            }
           
        }

        
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
