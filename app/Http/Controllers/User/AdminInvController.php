<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pemesanan;
use App\Senjata;
use App\Laporan;
use App\Admin;
use DB;
use Session;

class AdminInvController extends Controller
{
    public function getIndex(){
        $data['judul'] = 'ACC Pesanan';
        $data['pemesanans'] = Pemesanan::all();
    	return view('pages.adminInvView', $data);
    }

    public function getIndexInputSenjata(){
        $data['judul'] = 'Simpan Senjata';
        return view('pages.adminInvInputSenjata', $data);
    }

    public function getIndexInputLaporan(){
        $data['judul'] = 'Buat Laporan';
        return view('pages.adminInvInputLaporan', $data);
    }

    public function getIndexSenjata(){
        $data['judul'] = 'Senjata';
        $data['senjatas'] = Senjata::all();
        return view('pages.adminInvViewSenjata', $data);
    }

    public function getIndexLaporan(){
        $data['judul'] = 'Laporan';
        $data['laporans'] = Laporan::all();
        return view('pages.adminInvViewLaporan', $data);
    }

    public function postCreateAccPesanan(request $data){
        $strIsBought = $data['isBought'];
        $adminEmail = Session::get('admininv');
        $adminID = Admin::where('email', $adminEmail)->first()->id;
        $isBought = 0;
        $id = $data['id'];
        if(strcmp($strIsBought,'ACC') == 0) $isBought = 1;
        DB::table('pemesanans')
            ->where('id', $id)
            ->update(['isBought' => $isBought, 'adminID' => $adminID]);
        return redirect('admininv/index');
    }

    public function postCreateSenjata(request $data){
    	$senjata = new Senjata; 
        $isRepaired = 0;
        $isDamaged = 0;
        if(!is_null($data['isRepaired'])) $isRepaired = 1;
        if(!is_null($data['isDamaged'])) $isDamaged = 1;
        $senjata->jenis = $data['jenis'];
        $senjata->isRepaired = $isRepaired;
        $senjata->isDamaged = $isDamaged;
        $senjata->stok = $data['stok'];
        $saved = $senjata->save();
        if($saved) $data['saved'] = 'True';
        else $data['saved'] = 'False';
        return view('pages.adminInvInputSenjata', $data);
    }

    public function postCreateLaporan(request $data){
        $laporan = new Laporan;
        $adminEmail = Session::get('admininv');
        $adminID = Admin::where('email', $adminEmail)->first()->id;
        $laporan->laporan = $data['laporan'];
        $laporan->adminID = $adminID;
        $saved = $laporan->save();
        if($saved) $data['saved'] = 'True';
        else $data['saved'] = 'False';
        return view('pages.adminInvInputLaporan', $data);
    }

}
