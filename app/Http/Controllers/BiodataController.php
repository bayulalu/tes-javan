<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        $datas = Biodata::get();
        return view('biodata.index', compact('datas'));
    }

    public function create(){
        return view('biodata.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'level' => 'required',
           ]);


        Biodata::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'level' => $request->level
        ]);

        return redirect()->route('biodata')->with('msg','Data Berhasil Disimpan');
    }

    public function delete($id){
        $biodata = Biodata::findorfail($id);
        $biodata->delete();
        return redirect()->route('biodata')->with('msg','Data Berhasil Dihapus');
    }

    public function edit($id){
        $biodata = Biodata::findorfail($id);
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'level' => 'required',
        ]);

       Biodata::findorfail($id)->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'level' => $request->level
        ]);
        return redirect()->route('biodata')->with('msg','Data Berhasil Diupdate');

    }


}
