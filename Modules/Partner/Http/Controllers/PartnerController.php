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

   
    public function getres_partner(Request $request){

        $id_partner = $request->id_partner;
        
        $getData= CompanyDetail::where('id',$id_partner)->get();

        if (count($getData) > 0) {

            // when data there is
            $Detail = CompanyDetail::where('id',$id_partner)->first();

            $Bods = CompanyBod::where('id',$id_partner)->get();
            $Branchs = CompanyBranch::where('id',$id_partner)->get();
            $Divisions = CompanyDivision::where('id',$id_partner)->get();
            $Partners = CompanyPartner::where('id',$id_partner)->get();
            $Products = CompanyProduct::where('id',$id_partner)->get();
            $Socmeds = CompanySocmed::where('id',$id_partner)->get();
            $Subsidiarys = CompanySubsidiary::where('id',$id_partner)->get();
            $Hists = HistAm::where('id',$id_partner)->get();


            return view('partner::editpartner',compact('Detail'));
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
