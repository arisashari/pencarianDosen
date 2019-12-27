<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProsesController extends Controller
{
    function login(Request $request) {
        $nama       = $request->username;
        $password   = md5($request->password);

        $datapegawai = User::select()->where('username', '=', $nama)->where('password', '=', $password)->count();

        if ($datapegawai == 1) {
            $_SESSION['login'] = $nama;
            return redirect('/admin');
        } else {
            echo "<script type='text/javascript'>alert('Username atau Password salah!'); window.history.back(); </script>";
        }
    }
    
    function logout() {
        session_destroy();
        return redirect('/');
    }
}
