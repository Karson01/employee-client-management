<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consorzio;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class ConsorzioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consorzio = Consorzio::where('is_active','!=',1)->get();
        if($request->ajax()) {
            $allData= DataTables::of($consorzio)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('consorzio');
        //return view('admin/consorzio', compact('consorzios'));
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
    public function storeconsorzio(Request  $request)
    {
        
        $consorzio = new Consorzio();       
        $consorzio->name = $request['name']; 
        $consorzio->is_active = '0';       
        $consorzio->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('consorzio')->with('message', 'Saved consorzio ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateconsorzioForm(Request $request)
    {
        //print_r($request['id']);
        //$consorzio =  DB::table('consorzio')->where('id', $request['id'])->delete();
        $consorzio = Consorzio::where('id', $request['id'])->get();
         
        //if ($consorzio->isEmpty()) {
            return response()->json($consorzio);
       // }

        
        //return view('consorzio', ['consorzio' => $consorzio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateconsorzio(Request $request, $consorzio_id)
    {       

        $Consorzio = Consorzio::find($request['consorzio_id']);   
        $id=$request['consorzio_id'];
        $Consorzio->name = $request['name'];      
        $Consorzio->save();
        //print_r($request['country']);
        return response('updated');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteconsorzio(Request $request, $consorzio_id)
    {       

        $Consorzio = Consorzio::find($request['consorzio_del_id']);   
        $id=$request['consorzio_del_id'];
        $Consorzio->is_active = $request['is_active'];     
        $Consorzio->save();
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
    public function destroy(Request $request, $consorzio_id)
    {
        //
    }
}
