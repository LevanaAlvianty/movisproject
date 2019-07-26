<?php

namespace App\Http\Controllers\KabagKeuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KegiatanPO;
use App\Kodeunit;
use App\Pegawai;
use DB;


class KegiatanKabagKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatanpo= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama')
                    ->orderBy('kegiatanpo.id','desc')
                    ->get(); 
        $pegawai = DB::table('pegawai')
                    ->select('pegawai.*')
                    ->where('pegawai.nama','!=','')
                    ->get(); 
        return view('kabagkeuangan.kegiatanpo.index',compact('kegiatanpo','pegawai'));
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
        // $kegiatanpo= KegiatanPO::find($id);
        $kegiatanpo= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama','kelompokanggaran.kelompokanggaran')
                    ->where('kegiatanpo.id',$id)
                    ->first(); 
        $pegawai = Pegawai::all();
        return view('kabagkeuangan.kegiatanpo.lihat', compact('kegiatanpo','pegawai'));
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
        return view('kabagkeuangan.kegiatanpo.edit',compact('kegiatanpo','pegawai'));
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
        $kegiatanpo->reviewer_ang = $request->reviewer_ang;
        $kegiatanpo->update();
        return redirect()->route('kegiatankabagkeuangan.index')->with("success","Data Berhasil Diperbarui !");
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
