<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;
use Alert;

class MakulController extends Controller
{
    public function index()
    {
       $makul = Makul::all();
       return view('makul.index',compact('makul')); 
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan');
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id);
        return view('makul.edit',compact('makul'));
    }

    public function update(Request $request,$id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yey berhasil mengedit data','success');
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        toast('Yey berhasil menghapus data','success');
        return redirect()->route('makul');
    }
}
