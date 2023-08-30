<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Storage;

class DataPetugas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kode = User::kode();
        return view('dashboard.datapengguna.index', [
            'title' => 'Data Pengguna',
            'user1' => User::latest()->paginate(5)->withQueryString(),
            'kode' => $kode
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'induk' => 'required|unique:users',
            'password' => 'min:8|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/datapengguna')->with('success', 'Data Pengguna Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.datapengguna.edit', [
            'title' => 'Edit Data Pengguna',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'induk'       => 'required|string|min:2|max:100',
            'name'       => 'required|string|min:2|max:100',
        ]);

        $user = User::find($id);
        $user->induk = $request->induk;
        $user->name = $request->name;

        if (request()->hasFile('image')) {
            if ($user->image && file_exists(storage_path('app/public/images/' . $user->image))) {
                Storage::delete('app/public/images/' . $user->image);
            }

            $file = $request->file('image');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image->move(storage_path('app/public/images'), $fileName);
            $user->image = $fileName;
        }

        $user->save();
        return redirect('/datapengguna')->with('success', 'Profile Anda Berhasil di Perbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/datapengguna')->with('success', 'Data Pengguna Berhasil di hapus!');
    }
}
