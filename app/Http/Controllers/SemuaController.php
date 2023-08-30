<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Models\Keluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemuaController extends Controller
{
    public function index()
    {
        return view('dashboard.semua.index', [
            'title' => 'Semua Surat Arsip',
            'total_masuk' => Masuk::all()->count(),
            'total_keluar' => Keluar::all()->count(),
        ]);
    }

    public function masuk()
    {
        return view('dashboard.semua.allmasuk', [
            'title' => 'Semua Arsip Surat Masuk',
            'masuk1' => Masuk::latest()->paginate(10)->withQueryString(),
        ]);
    }

    public function keluar()
    {
        return view('dashboard.semua.allkeluar', [
            'title' => 'Semua Arsip Surat Keluar',
            'keluar1' => Keluar::latest()->paginate(10)->withQueryString(),
        ]);
    }
}
