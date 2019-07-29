<?php

namespace Modules\Partner\Http\Controllers;

use Modules\Partner\Entities\Partner;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('partner::index');
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

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('partner::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('partner::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
