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
        $pimpinan_jurusan= Auth::guard('pegawai')->user()->jurusan;
        $pimpinan_nip= Auth::guard('pegawai')->user()->nip;
        $data= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama')
                    ->where('kegiatanpo.id_jurbagnitpus','=',$pimpinan_jurusan) 
                    ->where('pegawai.nip','=',$pimpinan_nip) 
                    ->orderBy('kegiatanpo.tahun','desc')
                    ->orderBy('kegiatanpo.id','asc')
                    ->get(); 
                    // dd($data);
        $pegawai = DB::table('pegawai')
                    ->select('pegawai.*')
                    ->where('pegawai.nama','!=','')
                    ->get();  
        return view('pimpinan.kegiatanpo.index',compact('data','pegawai'));
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
                ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama','kelompokanggaran.kelompokanggaran')
                ->where('kegiatanpo.id','=',$id)
                ->first(); 
                // dd($kegiatanpo);
        $pegawai = Pegawai::all();
        return view('pimpinan.kegiatanpo.lihat', compact('kegiatanpo','pegawai'));
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
        return redirect()->route('kegiatanpimpinan.index')->with("success","PIC Berhasil Diset !");
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
