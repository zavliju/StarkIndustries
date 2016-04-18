<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pemesanan;
use App\Senjata;
use DB;

class PelangganController extends Controller
{
    public function getIndex(){
        $data['judul'] = 'View Pemesanan';
        $data['pemesanans'] = Pemesanan::all();
    	return view('pages.pelangganView', $data);
    }

    public function getIndexInput(){
        $data['judul'] = 'Input Pemesanan';
        $data['senjatas'] = Senjata::all();
        return view('pages.pelangganInput', $data);
    }

    public function postCreate(request $data){
    	$pemesanan = new Pemesanan;
        $pemesanan->senjataID = '1';
        $pemesanan->tglPesan = $data['tglPesan'];
        $saved = $pemesanan->save();
        if($saved) $data['saved'] = 'True';
        else $data['saved'] = 'False';
        return view('pages.pelangganInput', $data);
    }

}
