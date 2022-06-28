<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblkelahiran;
use App\Models\tblkematian;
use App\Models\tbltdkmampu;
use App\Models\tbldomisiliusaha;
use App\Models\tblbiodata;
use App\Models\tblumumdesa;

class SuratApiController extends Controller
  //=================================================================
    // ROUTE UNTUK TABEL KELAHIRAN
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

    //=================================================================
    // ROUTE UNTUK TABEL KEMATIAN
    public function simpan_srtkematian (request $request) {
        $tblkematian = tblkematian::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $tblkematian]);
    }

    public function show_srtkematian($id){
        $tblkematian = tblkematian::find($id);
        return response()->json(['message' => 'Succes', 'data' => $tblkematian]);  

    }
    public function update_srtkematian(Request $request, $id){

        $tblkematian = tblkematian::find($id);
        $tblkematian -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $tblkematian]);

    }
    public function destroy_srtkematian($id){
        $tblkematian = Tblkelahiran::find($id);
        $tblkematian ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    }
    //==========================================================================
    // ROUTE UNTUK TABEL SURAT TIDAK MAMPU  
    public function simpan_srttdkmampu (request $request) {
        $tbltdkmampu = tbltdkmampu ::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $tbltdkmampu]);
    }
    public function show_srttdkmampu($id){
        $tbltdkmampu = tbltdkmampu::find($id);
        return response()->json(['message' => 'Succes', 'data' => $tbltdkmampu]);  

    }
    public function update_srttdkmampu(Request $request, $id){

        $tbltdkmampu = tbltdkmampu::find($id);
        $tbltdkmampu -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $tbltdkmampu]);

    }
    public function destroy_srttdkmampu($id){
        $tbltdkmampu = tbltdkmampu::find($id);
        $tbltdkmampu ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    }

    //==========================================================================
    // ROUTE UNTUK TABEL SURAT TIDAK DOMISILI USAHA
    public function simpan_srtdomisiliusaha (request $request) {
        $tbltdomisiliusahas = tbldomisiliusaha ::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $tbltdomisiliusahas]);
    }
    public function show_srtdomisiliusaha($id){
        $tbltdomisiliusahas = tbldomisiliusaha::find($id);
        return response()->json(['message' => 'Succes', 'data' => $tbltdomisiliusahas]);  

    }
    public function update_srtdomisiliusaha(Request $request, $id){

        $tbltdomisiliusahas = tbldomisiliusaha::find($id);
        $tbltdomisiliusahas -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $tbltdomisiliusahas]);

    }
    public function destroy_srtdomisiliusaha($id){
        $tbltdomisiliusahas = tbldomisiliusaha::find($id);
        $tbltdomisiliusahas ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    }

    //==========================================================================
    // ROUTE UNTUK TABEL SURAT BIODATA
    public function simpan_srtbiodata (request $request) {
        $srtbiodatas = tblbiodata ::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $srtbiodatas]);
    }
    public function show_srtbiodata($id){
        $srtbiodatas = tblbiodata::find($id);
        return response()->json(['message' => 'Succes', 'data' => $srtbiodatas]);  

    }
    public function update_srtbiodata(Request $request, $id){

        $srtbiodatas = tblbiodata::find($id);
        $srtbiodatas -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $srtbiodatas]);

    }
    public function destroy_srtbiodata($id){
        $srtbiodatas = tblbiodata::find($id);
        $srtbiodatas ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    } 

    //==========================================================================
    // ROUTE UNTUK TABEL SURAT UMUM DESA
    public function simpan_srtumumdesa (request $request) {
        $srtumumdesas = tblumumdesa ::create($request->all());
        return response()->json(['message' => 'Data has been inserte succesfully', 'data' => $srtumumdesas]);
    }
    public function show_srtumumdesa($id){
        $srtumumdesas = tblumumdesa::find($id);
        return response()->json(['message' => 'Succes', 'data' => $srtumumdesas]);  

    }
    public function update_srtumumdesa(Request $request, $id){

        $srtumumdesas = tblumumdesa::find($id);
        $srtumumdesas -> update($request->all());
        return response()->json(['message' => 'Succes', 'data' => $srtumumdesas]);

    }
    public function destroy_srtumumdesa($id){
        $srtumumdesas = tblumumdesa::find($id);
        $srtumumdesas ->delete();
        return response()->json(['message' => 'Succes', 'data' => null]);
    } 

}
