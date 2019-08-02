<?php

namespace Modules\Partner\Http\Controllers;

use Modules\Partner\Entities\Partner;
use Modules\Partner\Entities\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

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
            $getpartner = CompanyDetail::where('id',$id_partner)->first();
            return view('partner::editpartner',compact('getpartner'));
        } else {
            $getpartner = Partner::where('id',$id_partner)->first();
            return view('partner::editpartner',compact('getpartner'));
        }
        

        
        
      }
  
}
