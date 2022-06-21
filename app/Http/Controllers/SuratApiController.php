<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblkelahiran;
class SuratApiController extends Controller
{
    public function surat_kelahiran(){
        $tblkelahirans = Tblkelahiran::all();
        return response()->json(['message' => 'Succes', 'data' => $tblkelahirans]);  
    }

    public function show($id){
        $tblkelahiran = Tblkelahiran::find($id);
        return response()->json(['message' => 'Succes', 'data' => $tblkelahiran]);  

    }

    public function simpan (request $request) {
        $tblkelahiran = Tblkelahiran::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $tblkelahiran]);
    }

    public function update(Request $request, $id){

        $tblkelahiran = Tblkelahiran::find($id);
        $tblkelahiran -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $tblkelahiran]);

    }

    public function destroy($id){
        $tblkelahiran = Tblkelahiran::find($id);
        $tblkelahiran ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    }
}
