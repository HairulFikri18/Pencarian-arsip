<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Tabel_Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::count();
        $arsip = Tabel_Arsip::count();

        if (Auth::check()) {
            return view('auth.dashboard', compact('pegawai','arsip'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
