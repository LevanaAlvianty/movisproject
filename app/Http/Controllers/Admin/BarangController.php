<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\KelompokAkun;
use App\Akun;
use App\Satuan;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = Akun::all();
        $barang = Barang::all();
        $kelompok = KelompokAkun::all();
        $satuan = Satuan::all();
        return view('admin.barang.index',compact('akun','barang','kelompok','satuan'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'namabarang' => 'required',
            'hargasatuan' => 'required',
            'id_satuan' => 'required',
            'id_akun' => 'required',
            'id_kelompok' => 'required',
        ]);

        $barang = new Barang();
        $barang->namabarang = $request->namabarang;
        $barang->hargasatuan = $request->hargasatuan;
        $barang->acuan = $request->acuan;
        $barang->id_satuan = $request->id_satuan;
        $barang->id_akun = $request->id_akun;
        $barang->id_kelompok = $request->id_kelompok;
        $barang->save();

        return redirect()->route('barang.index')
                    ->with('success','Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::where('id_standartbiaya',$id)->first();
        $kelompok = KelompokAkun::all();
        $satuan = Satuan::all();
        $akun = Akun::all();
        return view('admin.barang.show', compact('akun','kelompok','barang','satuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::where('id_standartbiaya',$id)->first();
        $kelompok = KelompokAkun::all();
        $satuan = Satuan::all();
        $akun = Akun::all();
        return view('admin.barang.edit', compact('akun','kelompok','barang','satuan'));
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
        $this->validate($request, [
            'namabarang' => 'required',
            'hargasatuan' => 'required',
            'id_satuan' => 'required',
            'id_akun' => 'required',
            'id_kelompok' => 'required',
        ]);

        $input = request()->except(['_token','_method']);
        $barang = Barang::where('id_standartbiaya',$id)->update($input);
        return redirect()->route('barang.index')->with("success","Data Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $indikator = DB::table('standartbiaya')->where('id_standartbiaya',$request->barang_id);
        $indikator->delete();
        return redirect()->route('barang.index')->with("success","Data Berhasil Dihapus!");
    }
}
