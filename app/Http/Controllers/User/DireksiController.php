<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Laporan;
use DB;
use Session;

class DireksiController extends Controller
{
    public function getIndex(){
        $data['judul'] = 'ACC Laporan';
        $data['laporans'] = Laporan::all();
    	return view('pages.direksiView', $data);
    }

    public function postCreateAccLaporan(request $data){
        $strIsAccepted = $data['isAccepted'];
        $isAccepted = 0;
        $id = $data['id'];
        if(strcmp($strIsAccepted,'ACC') == 0) $isAccepted = 1;
        DB::table('laporans')
            ->where('id', $id)
            ->update(['isAccepted' => $isAccepted]);
        return redirect('direksi/index');
    }
}
