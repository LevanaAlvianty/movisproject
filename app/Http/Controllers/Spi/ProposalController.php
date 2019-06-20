<?php

namespace App\Http\Controllers\Spi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Pegawai;
use App\Kodeunit;
use App\KelAnggaran;
use App\DetailAnggaran;
use App\StandartBiaya;
use DB;
use Response;

class ProposalController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $biaya = StandartBiaya::all();
        $anggaran = KelAnggaran::all();
        return view('spi.proposal.proposal', compact('biaya','anggaran'));
    }

    public function daftar()
    {
        return view('spi.prop_atribut.daftar');
    }

    public function penilaian() //perlu $id agar yang ditampilkan detail penilaian sesuai id proposal
    {
        return view('spi.prop_atribut.penilaian');
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
        return view('spi.daftar');
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
        // $pemesan = User::find($id);
        // $role = Role::all();
        // return view('admin.pemesan.edit',compact('pemesan','role'));
    }

    public function editproposal()
    {
        $biaya = StandartBiaya::all();
        $anggaran = KelAnggaran::all();
        return view('spi.edit.proposal', compact('biaya','anggaran'));
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

    public function KetuaPelaksana()
    {
        $term = Input::get('term');
        
        $results = array();
        
        $queries = DB::table('pegawai')
            ->where('id_pegawai', 'LIKE', '%'.$term.'%')
            ->orWhere('nama', 'LIKE', '%'.$term.'%')
            ->take(5)->get();
        
        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id_pegawai, 'label' => $query->nama , 'value' =>$query->nip];
        }
        return Response::json($results);
    }

    public function Kodeunit(Request $request)
    {
        $term = $request->get('name');
        
        $results = array();
        
        $queries = DB::table('jurbagnitpus')
            ->where('id_jurbagnitpus', 'LIKE', '%'.$term.'%')
            ->orWhere('kode', 'LIKE', '%'.$term.'%')
            ->take(10)->get();
        
        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id_jurbagnitpus, 'value' => $query->kode];
        }
        return Response::json($results);
    }
}
