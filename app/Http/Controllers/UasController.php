<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;
use RealRashid\SweetAlert\Facades\Alert;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Uas::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mahasiswa = new Uas;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;

       $simpan =  $mahasiswa->save();

    //    if($simpan){
    //     Alert::success('Success', 'Berhasil Ditambah');
    //     return redirect('/mahasiswa');
    //    }else{
    //     Alert::error('Failed', 'Data gagal ditambah');
    //    }

        return redirect('/mahasiswa'); 
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mahasiswa = Uas::where('id', $id)->first();

        $simpan =  $mahasiswa->save();
        
        return view('mahasiswa.edit', compact('mahasiswa'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        $mahasiswa = Uas::find($id);
        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        $simpan =  $mahasiswa->save();

        // if($simpan){
        //  Alert::success('Success', 'Berhasil diupdate');
        //  return redirect('/mahasiswa');
        // }else{
        //  Alert::error('Failed', 'Data gagal ditambah');
        // }

        return redirect('/mahasiswa'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mahasiswa = Uas::find($id);

        $hapus =  $mahasiswa->delete();

        // if($hapus){
        //  Alert::success('Success', 'Data Terhapus');
        //  return redirect('/mahasiswa');
        // }else{
        //  Alert::error('Failed', 'Data gagal ditambah');
        // }

        return redirect('/mahasiswa');
    }
}
