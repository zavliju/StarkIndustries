<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use Crypt;
use App\Pelanggan;
use App\Admin;
use App\Direksi;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function getIndex(){
        $data['judul'] = 'Login';
        return view('auth.login', $data);
    }

    public function getIndexAdminInv(){
        $data['judul'] = 'Login';
        return view('auth.loginAdminInv', $data);
    }

    public function getIndexDireksi(){
        $data['judul'] = 'Login';
        return view('auth.loginDireksi', $data);
    }

    public function postIsLogin(request $data){
    	$email = $data['email'];
    	$password = $data['password'];
    	$pelanggan = Pelanggan::where('email', $email);
    	if($pelanggan->count()>0){
            if(Crypt::decrypt($pelanggan->first()->password)==$password){
                Session::put('pelanggan', $email);
                return redirect('/pelanggan/index');
            }
    	}
    	return redirect('/login')->with('status', 'wrongAuth');
    }

    public function postIsLoginAdminInv(request $data){
        $email = $data['email'];
        $password = $data['password'];
        $adminInv = Admin::where('email', $email);
        if($adminInv->count()>0){
            if(Crypt::decrypt($adminInv->first()->password)==$password){
                Session::put('admininv', $email);
                return redirect('/admininv/index');
            }
        }
        return redirect('/login')->with('status', 'wrongAuth');
    }

    public function postIsLoginDireksi(request $data){
        $email = $data['email'];
        $password = $data['password'];
        $direksi = Direksi::where('email', $email);
        if($direksi->count()>0){
            if(Crypt::decrypt($direksi->first()->password)==$password){
                Session::put('direksi', $email);
                return redirect('/direksi/index');
            }
        }
        return redirect('/login')->with('status', 'wrongAuth');
    }

    public function getLogout(){
        Session::flush();
        return redirect('/login');
    }
}
