<?php

namespace App\Http\Controllers\Spi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Laporan;
use App\Proposal;
use PDF;
use DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function buatLaporan($id)
    {
        $kegiatan= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama','kelompokanggaran.kelompokanggaran')
                    ->where('kegiatanpo.id',$id)
                    ->first(); 
        $laporan=DB::table('laporan')
                    ->rightJoin('kegiatanpo', 'laporan.kegiatan_id','=', 'kegiatanpo.id')
                    ->select('laporan.*','laporan.id as lap_id')
                    ->where('kegiatanpo.id',$id )
                    ->first(); 
        return view('spi/laporan/laporan', compact('kegiatan','laporan'));
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

    public function viewLaporanPdf($idKegiatan)
    {
        $data['laporan'] = $laporan= Laporan::where('kegiatan_id', $idKegiatan)->first();
        // dump($data);
        // return view('spi/kegiatan/laporan-pdf', $data);
        $pdf = PDF::loadView('spi/kegiatan/laporan-pdf', $data);
        return $pdf->stream();
    }
    
}
