<?php

namespace App\Http\Controllers;

use App\ModelApiLumen;
use Illuminate\Http\Request;

class apiLumenController extends Controller
{
    /* function for construct controller
    * ----------------------------------    
    public function __construct()
        {
    }
    * ----------------------------------
    */

    /** function index */
    public function index(){
        $data = ModelApiLumen::all();
        return response($data);
    }
    
    /** function show data based on id*/
    public function show($id){
        $data = ModelApiLumen::where('id',$id)->get();
        return response($data);
    }
    
    /** function menyimpan data based on input request*/
    public function store(Request $request){
        $data = new ModelApiLumen();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();
        
        return response('berhasil menambahkan data!');
    }
    
    /** function mengubah data based on input request dan id*/
    public function update(Request $request, $id){
        $data = ModelApiLumen::where('id',$id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();
        
        return response('berhasil merubah data!');
    }
    
    /** function menghapus data based on id*/
    public function destroy($id){
        $data = ModelApiLumen::where('id',$id)->first();
        $data->delete();
        
        return response('berhasil menghapus data!');
    }

}

