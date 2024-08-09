<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        //fetch all products data
        //$products = Client::orderBy('id','desc')->get();
        $products = DB::table('client')->get();
        
        print_r($products);

        //pass products data to view and load list view
        return view('client.index', ['products' => $products]);
    }
    
    public function show($id){
        //fetch product data
        $product = Client::find($id);
        
        //pass products data to view and load list view
        return view('client.show', ['product' => $product]);
    }
    
    public function add(){
        //load form view
        return view('client.add');
    }
    
    public function insert(Request $request){
        //validate product data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        //get product data
        $productData = $request->all();
        
        //insert product data
        Client::create($productData);
        
 
        return redirect()->route('client.index')->with('message','Product details added successfully!');
    }
    
    public function edit($id){
        //get product data by id
        $product = Client::find($id);
        
        //load form view
        return view('client.edit', ['product' => $product]);
    }
    
    public function update($id, Request $request){
        //validate product data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        //get product data
        $productData = $request->all();
        
        //update product data
        Client::find($id)->update($productData);
        
 
        return redirect()->route('client.index')->with('message','Product details updated successfully!');
    }
    
    public function delete($id){
        //update product data
        Client::find($id)->delete();
        
        return redirect()->route('client.index')->with('message','Product details deleted successfully!');
    }
   

    
    

    

}
