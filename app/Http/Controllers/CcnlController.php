<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ccnl;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class CcnlController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$ccnl = Ccnl::get();
        $ccnl = Ccnl::where('is_active','!=',1)->get();
        if($request->ajax()) {
            $allData= DataTables::of($ccnl)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('ccnl');
        //return view('admin/ccnl', compact('ccnls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeccnl(Request  $request)
    {
        
        $ccnl = new Ccnl();       
        $ccnl->name = $request['name']; 
        $ccnl->is_active = '0';      
        $ccnl->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('ccnl')->with('message', 'Saved ccnl ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateccnlForm(Request $request)
    {
        //print_r($request['id']);
        //$ccnl =  DB::table('ccnl')->where('id', $request['id'])->delete();
        $ccnl = Ccnl::where('id', $request['id'])->get();
         
        //if ($ccnl->isEmpty()) {
            return response()->json($ccnl);
       // }

        
        //return view('ccnl', ['ccnl' => $ccnl]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateccnl(Request $request, $ccnl_id)
    {       

        $Ccnl = Ccnl::find($request['ccnl_id']);   
        $id=$request['ccnl_id'];
        $Ccnl->name = $request['name'];      
        $Ccnl->save();
        //print_r($request['country']);
        return response('updated');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteccnl(Request $request, $ccnl_id)
    {       

        $Ccnl = Ccnl::find($request['ccnl_del_id']);   
        $id=$request['ccnl_del_id'];
        $Ccnl->is_active = $request['is_active'];     
        $Ccnl->save();
        //print_r($request['country']);
        return response('deleted');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
