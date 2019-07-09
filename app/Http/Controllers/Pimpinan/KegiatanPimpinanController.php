<?php

namespace App\Http\Controllers\Pimpinan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KegiatanPO;
use App\Kodeunit;
use App\Pegawai;
use DB;
use Auth;

class KegiatanPimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Auth::guard('pegawai')->user()->nip;
        $data= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.id_jurbagnitpus','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.nip','=','kegiatanpo.pimpinan')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama')
                    ->where('kegiatanpo.pimpinan','=',$data)
                    ->get(); 
                    // dd($data);
        $kegiatanpo = KegiatanPO::all();
        $pegawai = DB::table('pegawai')
                    ->select('pegawai.*')
                    ->where('pegawai.nama','!=','')
                    ->get();  
        return view('pimpinan.kegiatanpo.index',compact('data','pegawai','kegiatanpo'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatanpo= KegiatanPO::find($id);
        $kodeunit = Kodeunit::all();
        $pegawai = Pegawai::all();
        return view('pimpinan.kegiatanpo.lihat', compact('kegiatanpo','kodeunit','pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatanpo = KegiatanPO::find($id);
        $pegawai = DB::table('pegawai')
                ->select('pegawai.*')
                ->where('pegawai.nama','!=','')
                ->get();
        return view('pimpinan.kegiatanpo.edit',compact('kegiatanpo','pegawai'));
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
        $kegiatanpo = KegiatanPO::find($id);
        $kegiatanpo->nip_pic = $request->pic;
        $kegiatanpo->update();
        return redirect()->route('kegiatanpimpinan.index')->with("success","Data Berhasil Diperbarui !");
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
    }
}