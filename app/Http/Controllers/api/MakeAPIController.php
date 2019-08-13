<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Proposal;
use App\Pegawai; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Response;
use DB;
use Validator;

class MakeAPIController extends Controller
{
    public function getData()
    {
        //Count Jumlah Proposal
        $proposal = Proposal::all()->count();
        $prop_belumsubmit= Proposal::where('status','0')->count();
        $prop_submit= Proposal::where('status','1')->count();
        $prop_revisi= Proposal::where('status','2')->count();
        $prop_disetujui = Proposal::where('status','3')->count();

        //Count JUmlah Laporan
        $laporan = \App\Laporan::all()->count();
        $laporan_belumsubmit= \App\Laporan::where('status','0')->count();
        $laporan_submit= \App\Laporan::where('status','1')->count();
        $laporan_revisi= \App\Laporan::where('status','2')->count();
        $laporan_disetujui = \App\Laporan::where('status','3')->count();

        //Count Jumlah Kegiatan
        $kegiatan = \App\KegiatanPO::all()->count();

        //get Data Kegiatan
        $data_kegiatan = DB::table('kegiatanpo')
                        ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                        ->select('kegiatanpo.id','kegiatanpo.kode_akun','kegiatanpo.sumber','jurbagnitpus.kode','jurbagnitpus.jurbagnitpus','kegiatanpo.nama_kegiatan','kegiatanpo.tahun')
                        ->orderBy('kegiatanpo.tahun','desc')
                        ->orderBy('kegiatanpo.id','asc')
                        ->get();

        //get Data Proposal 
            $dataproposal = DB::table('proposal')
                            ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                            ->join('jurbagnitpus','jurbagnitpus.kode','=','proposal.kodeunit')
                            ->select('proposal.id','proposal.judul','jurbagnitpus.jurbagnitpus','proposal.status','proposal.thn_anggaran')
                            ->groupBy('proposal.status','proposal.id')
                            ->get();

            //1.get Data Proposal Belum Submit
                $data_proposal_belum_submit = DB::table('proposal')
                                            ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                                            ->join('jurbagnitpus','jurbagnitpus.kode','=','proposal.kodeunit')
                                            ->select('proposal.judul','jurbagnitpus.jurbagnitpus','proposal.status','proposal.thn_anggaran')
                                            ->where('proposal.status','0')
                                            ->orderBy('proposal.status','desc')
                                            ->orderBy('proposal.id','asc')
                                            ->get();

            //2.get Data Proposal Submit
                $data_proposal_submit = DB::table('proposal')
                                            ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                                            ->join('jurbagnitpus','jurbagnitpus.kode','=','proposal.kodeunit')
                                            ->select('proposal.judul','jurbagnitpus.jurbagnitpus','proposal.status','proposal.thn_anggaran')
                                            ->where('proposal.status','1')
                                            ->orderBy('proposal.status','desc')
                                            ->orderBy('proposal.id','asc')
                                            ->get();

            //3.get Data Proposal Revisi
                $data_proposal_revisi = DB::table('proposal')
                                        ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                                        ->join('jurbagnitpus','jurbagnitpus.kode','=','proposal.kodeunit')
                                        ->select('proposal.judul','jurbagnitpus.jurbagnitpus','proposal.status','proposal.thn_anggaran')
                                        ->where('proposal.status','2')
                                        ->orderBy('proposal.status','desc')
                                        ->orderBy('proposal.id','asc')
                                        ->get();

            //4.get Data Proposal Disetujui
                $data_proposal_disetujui = DB::table('proposal')
                                        ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                                        ->join('jurbagnitpus','jurbagnitpus.kode','=','proposal.kodeunit')
                                        ->select('proposal.judul','jurbagnitpus.jurbagnitpus','proposal.status','proposal.thn_anggaran')
                                        ->where('proposal.status','3')
                                        ->orderBy('proposal.status','desc')
                                        ->orderBy('proposal.id','asc')
                                        ->get();
        
        //get Data laporan 
        $datalaporan = DB::table('laporan')
                        ->join('kegiatanpo','kegiatanpo.id','=','laporan.id_kegiatan')
                        ->join('jurbagnitpus','jurbagnitpus.kode','=','laporan.kodeunit')
                        ->select('laporan.judul','jurbagnitpus.jurbagnitpus','laporan.status','laporan.thn_anggaran')
                        ->groupBy('laporan.status','laporan.id')
                        ->get();
            
            //1.get Data laporan Belum Submit
            $data_laporan_belum_submit = DB::table('laporan')
                                        ->join('kegiatanpo','kegiatanpo.id','=','laporan.id_kegiatan')
                                        ->join('jurbagnitpus','jurbagnitpus.kode','=','laporan.kodeunit')
                                        ->select('laporan.judul','jurbagnitpus.jurbagnitpus','laporan.status','laporan.thn_anggaran')
                                        ->where('laporan.status','0')
                                        ->orderBy('laporan.status','desc')
                                        ->orderBy('laporan.id','asc')
                                        ->get();

            //2.get Data laporan Submit
            $data_laporan_submit = DB::table('laporan')
                                    ->join('kegiatanpo','kegiatanpo.id','=','laporan.id_kegiatan')
                                    ->join('jurbagnitpus','jurbagnitpus.kode','=','laporan.kodeunit')
                                    ->select('laporan.judul','jurbagnitpus.jurbagnitpus','laporan.status','laporan.thn_anggaran')
                                    ->where('laporan.status','1')
                                    ->orderBy('laporan.status','desc')
                                    ->orderBy('laporan.id','asc')
                                    ->get();

            //3.get Data laporan Revisi
            $data_laporan_revisi = DB::table('laporan')
                                    ->join('kegiatanpo','kegiatanpo.id','=','laporan.id_kegiatan')
                                    ->join('jurbagnitpus','jurbagnitpus.kode','=','laporan.kodeunit')
                                    ->select('laporan.judul','jurbagnitpus.jurbagnitpus','laporan.status','laporan.thn_anggaran')
                                    ->where('laporan.status','2')
                                    ->orderBy('laporan.status','desc')
                                    ->orderBy('laporan.id','asc')
                                    ->get();

            //4.get Data laporan Disetujui
            $data_laporan_disetujui = DB::table('laporan')
                                        ->join('kegiatanpo','kegiatanpo.id','=','laporan.id_kegiatan')
                                        ->join('jurbagnitpus','jurbagnitpus.kode','=','laporan.kodeunit')
                                        ->select('laporan.judul','jurbagnitpus.jurbagnitpus','laporan.status','laporan.thn_anggaran')
                                        ->where('laporan.status','3')
                                        ->orderBy('laporan.status','desc')
                                        ->orderBy('laporan.id','asc')
                                        ->get();

        //get Data Pegawai for Login
        $login = DB::table('pegawai_role')
                ->join('roles','roles.id','=','pegawai_role.role_id')
                ->join('pegawai','pegawai.id_pegawai','=','pegawai_role.pegawai_id')
                ->select('pegawai.nip','pegawai.password')
                ->where('pegawai_role.role_id',5)
                ->get();

	    return Response::json([
            'KEGIATAN_COUNT'=>array(
                'jumlah'=>$kegiatan,
            ),
            'PROPOSAL_COUNT'=>array(
                'jumlah'=>$proposal,
                'belum_submit'=>$prop_belumsubmit,
                'submit'=>$prop_submit,
                'revisi'=>$prop_revisi,
                'disetujui'=>$prop_disetujui,
            ),
            'LAPORAN_COUNT'=>array(
                'jumlah'=>$laporan,
                'belum_submit'=>$laporan_belumsubmit,
                'submit'=>$laporan_submit,
                'revisi'=>$laporan_revisi,
                'disetujui'=>$laporan_disetujui,
            ),
            'dataproposal'=>$dataproposal,
            'data_proposal_belum_submit'=>$data_proposal_belum_submit,
            'data_proposal_submit'=>$data_proposal_submit,
            'data_proposal_revisi'=>$data_proposal_revisi,
            'data_proposal_disetujui'=>$data_proposal_disetujui,
            'datalaporan'=>$datalaporan,
            'data_laporan_belum_submit'=>$data_laporan_belum_submit,
            'data_laporan_submit'=>$data_laporan_submit,
            'data_laporan_revisi'=>$data_laporan_revisi,
            'data_laporan_disetujui'=>$data_laporan_disetujui,
            'login'=>$login,
            'data_kegiatan'=>$data_kegiatan,
        ]);
    }

    public function login(){ 
        if(Auth::guard('pegawai')->attempt(['nip' => request('nip'), 'password' => request('password')])){ 
            $user = Auth::guard('pegawai')->user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function details() 
    { 
        $user = Auth::guard('pegawai')->user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
