<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    
    public function index(Request $request){
        /*//fetch all products data
        //$products = Employee::orderBy('id','desc')->get();
        $zones = DB::table('zones')->get();
        $consorzio = DB::table('consorzio')->get();             
       // print_r($zones);
        //pass products data to view and load list view
        //return $products;
        return view('admin.employee', ['zones' => $zones,'consorzio' => $consorzio]);*/

        //$employee = Employee::get();
        $employee = Employee::where('is_active','!=',1)->get();
        if($request->ajax()) {
            $allData= DataTables::of($employee)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn='';
                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return compact('employee');
        //return view('admin/employee', compact('employee'));
        
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
    public function storeemployee(Request  $request)
    {        

        $employee = new Employee();       
        $employee->name = $request['name'];  
        $employee->sur_name = $request['sur_name'];  
        $employee->codice_fiscale = $request['codice_fiscale'];  
        $employee->negozio_principale_id = $request['negozio_principale_id'];
        $employee->email = $request['email'];
        $employee->mansione = $request['mansione'];
        $employee->tel = $request['tel']; 
        $employee->contract_id = $request['contract_id']; 
        $employee->tipe_of_contract = $request['tipe_of_contract']; 
        $employee->ccnl_id = $request['ccnl_id'];
        $employee->livello = $request['livello'];
        $employee->ore_contratto = $request['ore_contratto'];
        $employee->orario_notturno = $request['orario_notturno'];
        $employee->data_assunzione = $request['data_assunzione']; 
        $employee->data_scadenza = $request['data_scadenza'];   
        $employee->is_active = '0';     
        $employee->save();       
        
        return response('successfully inserted');
      
        //return redirect()->route('employee')->with('message', 'Saved employee ' . $request['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateemployeeForm(Request $request)
    {
        //print_r($request['id']);
        //$employee =  DB::table('employee')->where('id', $request['id'])->delete();
        $employee = Employee::where('id', $request['id'])->get();
         
        //if ($employee->isEmpty()) {
            return response()->json($employee);
       // }

        
        //return view('employee', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateemployee(Request $request, $employee_id)
    {       

        $Employee = Employee::find($request['employee_id']);   
        $id=$request['employee_id'];
        $Employee->name = $request['name'];  
        $Employee->sur_name = $request['sur_name'];  
        $Employee->codice_fiscale = $request['codice_fiscale'];  
        $Employee->negozio_principale_id = $request['negozio_principale_id'];
        $Employee->email = $request['email'];
        $Employee->mansione = $request['mansione'];
        $Employee->tel = $request['tel']; 
        $Employee->contract_id = $request['contract_id']; 
        $Employee->tipe_of_contract = $request['tipe_of_contract']; 
        $Employee->ccnl_id = $request['ccnl_id'];
        $Employee->livello = $request['livello'];
        $Employee->ore_contratto = $request['ore_contratto'];
        $Employee->orario_notturno = $request['orario_notturno'];
        $Employee->data_assunzione = $request['data_assunzione']; 
        $Employee->data_scadenza = $request['data_scadenza'];      
        $Employee->save();
        //print_r($request['country']);
        return response('updated');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteemployee(Request $request, $employee_id)
    {       

        $Employee = Employee::find($request['employee_del_id']);   
        $id=$request['employee_del_id'];
        $Employee->is_active = $request['is_active'];     
        $Employee->save();
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
