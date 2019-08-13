<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Indikator;
use App\ProgramUtama;
use App\Renstra;
use DB;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = ProgramUtama::all();
        $indikator = Indikator::all();
        return view('admin.indikator-kerja.index',compact('indikator','program'));
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
            'dirkegiatan' => 'required',
            'id_dirprogutama' => 'required',
        ]);

        $indikator = new Indikator();
        $indikator->dirkegiatan = $request->dirkegiatan;
        $indikator->id_dirprogutama = $request->id_dirprogutama;
        $indikator->tahun_penetapan = $request->tahun_penetapan;
        $indikator->status = $request->status;
        $indikator->keterangan = $request->keterangan;
        $indikator->save();

        return redirect()->route('indikator.index')
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
        $indikator = Indikator::where('id_dirkegiatan',$id)->first();
        $program = ProgramUtama::all();
        return view('admin.indikator-kerja.show', compact('program','indikator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indikator = Indikator::where('id_dirkegiatan',$id)->first();
        $program = ProgramUtama::all();
        return view('admin.indikator-kerja.edit', compact('program','indikator'));
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
            'dirkegiatan' => 'required',
            'id_dirprogutama' => 'required',
        ]);

        $input = request()->except(['_token','_method']);
        $indikator = Indikator::where('id_dirkegiatan',$id)->update($input);
        return redirect()->route('indikator.index')->with("success","Data Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $indikator = DB::table('dirkegiatan')->where('id_dirkegiatan',$request->kegiatan_id);
        $indikator->delete();
        return redirect()->route('indikator.index')->with("success","Data Berhasil Dihapus!");
    }
}
