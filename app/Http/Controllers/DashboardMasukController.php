<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class DashboardMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $uniqueYears = Masuk::selectRaw('YEAR(created_at) as year')->distinct()->pluck('year');
        $kode = Masuk::kode();
        return view('dashboard.masuk.index', compact('uniqueYears'), [
            'title' => 'Surat Arsip Masuk',
            'active' => 'Surat Masuk',
            'masuk1' => Masuk::latest()->where('user_id', auth()->user()->id)->paginate(5)->withQueryString(),
            'user' => User::where('id', auth()->user()->id)->get(),
            'masuk' => Masuk::where('user_id', auth()->user()->id)->get(),
            'kodesm' =>  $kode
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = Masuk::kode();
        return view('dashboard.masuk.create', [
            'title' => 'Surat Masuk',
            'active' => 'masuk',
            'user' => User::where('id', auth()->user()->id)->get(),
            'kodesm' =>  $kode
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // buat ngeposting data
    //     $validatedData = $request->validate([
    //         'kodesm' => 'required|max:255',
    //         'nama' => 'required|max:255',
    //         'lamp' => 'required|max:255',
    //         'pengirim' => 'required|max:255',
    //         'alamat' => 'required|max:255',
    //         'tanggal' => 'required|max:255',
    //         'nomor' => 'required|max:255',
    //         'prihal' => 'required|max:255',
    //         'pdf' => 'required|mimes:pdf|max:5024',
    //         'keterangan' => 'required|max:255',
    //     ]);

    //     if ($request->file('pdf')) {
    //         $validatedData['pdf'] = $request->file('pdf')->store('masuk');
    //     }

    //     $validatedData['user_id'] = auth()->user()->id;

    //     Masuk::create($validatedData);
    //     // untuk menampilkan alert atau kata sukses
    //     return redirect('/dashboard/masuk')->with('success', 'Surat Masuk Berhasil Disimpan!');

    // }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'kodesm' => 'required|max:255',
            'nama' => 'required|max:255',
            'lamp' => 'required|max:255',
            'pengirim' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'nomor' => 'required|max:255',
            'prihal' => 'required|max:255',
            'pdf' => 'required|mimes:pdf|max:5024',
            'keterangan' => 'required|max:255',
        ]);

        if ($request->file('pdf')) {
            $validatedData['pdf'] = $request->file('pdf')->store('masuk');
        }

        $validatedData['user_id'] = auth()->user()->id;

        // Attempt to create the record
        $masuk = Masuk::create($validatedData);

        if ($masuk) {
            return redirect('/dashboard/masuk')
                ->with('success', 'Surat Masuk Berhasil Disimpan!');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menyimpan Surat Masuk');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function show(Masuk $masuk)
    {
        // return view('dashboard.masuk.show', [
        //     'title' => 'Surat Masuk',
        //     'masuk' => $masuk,
        //     'user' => User::where('id', auth()->user()->id)->get(),
        // ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        return view('dashboard.masuk.edit', [
            'masuk' => $masuk,
            'title' => 'Surat Masuk',
            'user' => User::where('id', auth()->user()->id)->get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masuk $masuk)
    {
        // buat menyimpan update data
        $rules = [
            'nama' => 'required|max:255',
            'lamp' => 'required|max:255',
            'pengirim' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'nomor' => 'required|max:255',
            'prihal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'pdf' => 'mimes:pdf|max:5024',
        ];

        if ($request->kodesm != $masuk->kodesm) {
            $rules['kodesm'] = 'required|unique:masuks';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('pdf')) {
            if ($request->oldpdf) {
                Storage::delete($request->oldpdf);
            }
            $validatedData['pdf'] = $request->file('pdf')->store('masuk');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Masuk::where('id', $masuk->id)
            ->update($validatedData);

        return redirect('/dashboard/masuk')->with('success', 'Surat Masuk Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk)
    {
        if ($masuk->pdf) {
            Storage::delete($masuk->pdf);
        }
        // buat deleted data
        Masuk::destroy($masuk->id);
        // alert sukses delete
        return redirect('/dashboard/masuk')->with('success', 'Surat Masuk Berhasil Dihapus!');
    }
}
