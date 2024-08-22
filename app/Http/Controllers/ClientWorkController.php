<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientWork;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class ClientWorkController extends Controller
{
    public function index(Request $request){
        /*//fetch all products data
        //$products = Client::orderBy('id','desc')->get();
        $zones = DB::table('zones')->get();
        $consorzio = DB::table('consorzio')->get();             
       // print_r($zones);
        //pass products data to view and load list view
        //return $products;
        return view('admin.client', ['zones' => $zones,'consorzio' => $consorzio]);*/

        //$client = Client::get();
        $client = DB::table('employee')
                    ->leftjoin('client_work', 'employee.id', '=', 'client_work.employee_id')
                    ->select('employee.name','employee.id')
                    ->where('employee.is_active', '!=', 1)
                    ->get();

        
       // $client = Client::where('is_active','!=',1)->get();
        if($request->ajax()) {
            $allData= DataTables::of($client)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('client-work-entry');
        //return view('admin/client', compact('client'));
        
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
    public function storeclient(Request  $request)
    {
        
        $isExist = ClientWork::select("*")
        ->where("client_id", "yemmerich@example.net")
        ->where("check_date", "yemmerich@example.net")
        ->where("employee_id", "yemmerich@example.net")
        ->exists();

        if ($isExist) {
        dd('Record is available.');
        }else{
        dd('Record is not available.');
        }

        $client = new Client();       
        $client->name = $request['name'];  
        $client->vat = $request['vat'];  
        $client->indirizzo_fatturazione = $request['indirizzo_fatturazione'];  
        $client->consorzio_id = $request['consorzio_id'];
        $client->contract_id = $request['contract_id'];
        $client->zone_id = $request['zone_id'];
        $client->indirizzo_negozio = $request['indirizzo_negozio']; 
        $client->referente = $request['referente']; 
        $client->tel = $request['tel']; 
        $client->email = $request['email'];
        $client->is_active = '0';         
        $client->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('client')->with('message', 'Saved client ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateclientForm(Request $request)
    {
        //print_r($request['id']);
        //$client =  DB::table('client')->where('id', $request['id'])->delete();
        $client = Client::where('id', $request['id'])->get();
         
        //if ($client->isEmpty()) {
            return response()->json($client);
       // }

        
        //return view('client', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateclient(Request $request, $client_id)
    {       

        $Client = Client::find($request['client_id']);   
        $id=$request['client_id'];
        $Client->name = $request['name'];  
        $Client->vat = $request['vat'];  
        $Client->indirizzo_fatturazione = $request['indirizzo_fatturazione'];  
        $Client->consorzio_id = $request['consorzio_id'];
        $Client->contract_id = $request['contract_id'];
        $Client->zone_id = $request['zone_id'];
        $Client->indirizzo_negozio = $request['indirizzo_negozio']; 
        $Client->referente = $request['referente']; 
        $Client->tel = $request['tel']; 
        $Client->email = $request['email'];       
        $Client->save();
        //print_r($request['country']);
        return response('updated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteclient(Request $request, $client_id)
    {       

        $Client = Client::find($request['client_del_id']);   
        $id=$request['client_del_id'];
        $Client->is_active = $request['is_active'];     
        $Client->save();
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
