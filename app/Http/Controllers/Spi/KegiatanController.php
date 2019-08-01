<?php

namespace App\Http\Controllers\Spi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\KegiatanPO;
use App\Kodeunit;
use App\Pegawai;
use DB;
use Auth;
use Response;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pic = Auth::guard('pegawai')->user()->nip;
        // $kegiatan= DB::table('kegiatanpo')
        //             ->leftJoin('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
        //             ->leftJoin('pegawai','pegawai.nip','=','kegiatanpo.nip_pic')
        //             ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
        //             ->select('kegiatanpo.*','kegiatanpo.id as id_kegiatan','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama','kelompokanggaran.kelompokanggaran')
        //             ->where('kegiatanpo.nip_pic','=',$pic)
        //             ->get(); 
        // $proposal=DB::table('proposal')
        //             ->select('proposal.*')
        //             ->get(); 
        
        $data['kegiatanpos'] = KegiatanPO::with('proposal')->where('nip_pic', $pic)->get();
        dump($data);

        return view('spi.kegiatan.index', $data);
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
