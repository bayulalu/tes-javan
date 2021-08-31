<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiBiodataController extends Controller
{
    public function index(){
        $datas = Biodata::get();
        return $datas;
    }


    public function store(Request $request){
       
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'jk' => 'required',
            'level' => 'required'
        ]);

        if($validator->fails()){
            response()->json($validator->messages(), 422)->send();
            exit;
        }

        Biodata::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'level' => $request->level
        ]);
        return response()->json(['message' => 'Data Berhasil Disimpan']);
    }

    public function delete(Request $request){

        $validator = Validator::make(request()->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            response()->json($validator->messages(), 422)->send();
            exit;
        }

        $biodata = Biodata::findorfail($request->id);
        $biodata->delete();
        return response()->json(['message' => 'Data Berhasil Dihapus']);

    }

    public function show($id){
        $biodata = Biodata::findorfail($id);
        return $biodata;
        
    }

    public function update(Request $request, $id){
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'jk' => 'required',
            'level' => 'required'
        ]);

        if($validator->fails()){
            response()->json($validator->messages(), 422)->send();
            exit;
        }

       Biodata::findorfail($id)->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'level' => $request->level
        ]);
        return response()->json(['message' => 'Data Berhasil Diupdate']);


    }

}
