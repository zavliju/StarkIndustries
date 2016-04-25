<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Perbaikan;
use App\Aset;
use App\Petugas;

class PetugasController extends Controller
{
    public function getIndex(){
        $data['judul'] = 'Petugas';
        $data['asets'] = Aset::all();
    	return view('pages.petugasView', $data);
    }

    public function getIndexInput(){
        $data['judul'] = 'Input Aset';
        return view('pages.petugasInput', $data);
    }

    public function getIndexPerbaikan(){
        $data['judul'] = 'Petugas';
        $petugasEmail = Session::get('petugas');
        $petugasID = Petugas::where('email', $petugasEmail)->first()->id;
        $data['perbaikans'] = Perbaikan::all();
        return view('pages.petugasViewPerbaikan', $data);
    }

    // public function getIndexLaporan(){
    //     $data['judul'] = 'Laporan';
    //     $data['laporans'] = Laporan::all();
    //     return view('pages.adminInvViewLaporan', $data);
    // }

    public function postCreatePerbaikan(request $data){
        $petugasEmail = Session::get('petugas');
        $petugasID = Petugas::where('email', $petugasEmail)->first()->id;
        $status = $data['status'];
        $id = $data['id'];
        if($status != 4){
            DB::table('asets')
                ->where('id', $id)
                ->update(['status' => $status]);
        }else{
            DB::table('asets')
                ->where('id', $id)
                ->delete();
        }
        $perbaikan = new Perbaikan;
        $perbaikan->status = $status;
        $perbaikan->id_aset = $id;
        $perbaikan->id_petugas = $petugasID;
        $perbaikan->save();
        return redirect('petugas/index');
    }

    public function postCreateAset(request $data){
    	$aset = new Aset; 
        $aset->nama = $data['nama'];
        $aset->jenis = $data['jenis'];
        $aset->status = 1;
        $saved = $aset->save();
        if($saved) $data['saved'] = 'True';
        else $data['saved'] = 'False';
        return view('pages.petugasInput', $data);
    }

    // public function postCreateLaporan(request $data){
    //     $laporan = new Laporan;
    //     $adminEmail = Session::get('admininv');
    //     $adminID = Admin::where('email', $adminEmail)->first()->id;
    //     $laporan->laporan = $data['laporan'];
    //     $laporan->adminID = $adminID;
    //     $saved = $laporan->save();
    //     if($saved) $data['saved'] = 'True';
    //     else $data['saved'] = 'False';
    //     return view('pages.adminInvInputLaporan', $data);
    // }

}
