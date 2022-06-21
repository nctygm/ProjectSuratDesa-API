<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblkelahiran;

class SuratController extends Controller
{
    public function surat_kelahiran () {
        $tblkelahirans = Tblkelahiran::all();
        return view('/HalamanSurat.surat_kelahiran',compact(['tblkelahirans']));
    }

    public function create () {
        return view('/HalamanSurat.create');
    }

    public function simpan (request $request) {
    Tblkelahiran::create($request->all());
    return redirect('/HalamanSurat');
    }

    public function edit($id){
        $tblkelahirans = Tblkelahiran::find($id);
        return view('/HalamanSurat.edit', compact(['tblkelahirans']));
    }

    public function update(Request $request, $id){
        $tblkelahirans = Tblkelahiran::find($id);
        $tblkelahirans -> update($request->all());
        return redirect('/HalamanSurat');

    }

    public function destroy($id){
        $tblkelahirans = Tblkelahiran::find($id);
        $tblkelahirans ->delete();
        return redirect('/HalamanSurat');
    }



}
 