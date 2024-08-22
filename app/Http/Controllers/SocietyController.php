<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Society;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class SocietyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $society = Society::get();
        $society = Society::where('is_active','!=',1)->get();
        if($request->ajax()) {
            $allData= DataTables::of($society)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('society');
        //return view('admin/society', compact('societys'));
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
    public function storesociety(Request  $request)
    {
        
        $society = new Society();       
        $society->name = $request['name']; 
        $society->is_active = '0';       
        $society->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('society')->with('message', 'Saved society ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesocietyForm(Request $request)
    {
        //print_r($request['id']);
        //$society =  DB::table('society')->where('id', $request['id'])->delete();
        $society = Society::where('id', $request['id'])->get();
         
        //if ($society->isEmpty()) {
            return response()->json($society);
       // }

        
        //return view('society', ['society' => $society]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesociety(Request $request, $society_id)
    {       

        $Society = Society::find($request['society_id']);   
        $id=$request['society_id'];
        $Society->name = $request['name'];      
        $Society->save();
        //print_r($request['country']);
        return response('updated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletesociety(Request $request, $society_id)
    {       

        $Society = Society::find($request['society_del_id']);   
        $id=$request['society_del_id'];
        $Society->is_active = $request['is_active'];     
        $Society->save();
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
