<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zones = Zone::where('is_active','!=',1)->get();
       // $zones = Zone::get();
        if($request->ajax()) {
            $allData= DataTables::of($zones)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('zones');
        //return view('admin/zone', compact('zones'));
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
    public function storezone(Request  $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $Zone = new Zone();       
        $Zone->name = $request['name']; 
        $Zone->is_active = '0';       
        $Zone->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('zone')->with('message', 'Saved zone ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatezoneForm(Request $request)
    {
        //print_r($request['id']);
        //$zone =  DB::table('zone')->where('id', $request['id'])->delete();
        $zone = Zone::where('id', $request['id'])->get();
         
        //if ($zone->isEmpty()) {
            return response()->json($zone);
       // }

        
        //return view('zone', ['zone' => $zone]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatezone(Request $request, $zone_id)
    {       

        $Zone = Zone::find($request['zone_id']);   
        $id=$request['zone_id'];
        $Zone->name = $request['name'];      
        $Zone->save();
        //print_r($request['country']);
        return response('updated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletezone(Request $request, $zone_id)
    {       

        $Zone = Zone::find($request['zone_del_id']);   
        $id=$request['zone_del_id'];
        $Zone->is_active = $request['is_active'];     
        $Zone->save();
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
