<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use Crypt;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Petugas;
class LoginController extends Controller
{

    public function getIndex(){
        $data['judul'] = 'Login';
        return view('auth.login', $data);
    }

    public function postIsLogin(request $data){
    	$email = $data['email'];
    	$pass = $data['pass'];
    	$petugas = Petugas::where('email', $email);
    	if($petugas->count()>0){
            if(Crypt::decrypt($petugas->first()->pass)==$pass){
                Session::put('petugas', $email);
                return redirect('/petugas/index');
            }
    	}
    	return redirect('/login')->with('status', 'wrongAuth');
    }

    public function getLogout(){
        Session::flush();
        return redirect('/login');
    }
}
