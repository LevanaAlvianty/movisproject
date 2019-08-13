<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProgramUtama;
use App\Renstra;
use DB;

class ProgramUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $renstra = Renstra::all();
        $program = ProgramUtama::all();
        return view('admin.programutama.index',compact('renstra','program'));
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
            'dirprogutama' => 'required',
            'id_renstra' => 'required',
        ]);

        $program = new ProgramUtama();
        $program->dirprogutama = $request->dirprogutama;
        $program->id_renstra = $request->id_renstra;
        $program->tahun_penetapan = $request->tahun_penetapan;
        $program->status = $request->status;
        $program->save();

        return redirect()->route('programutama.index')
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
        $program = ProgramUtama::where('id_dirprogutama',$id)->first();
        $renstra = Renstra::all();
        return view('admin.programutama.show', compact('program','renstra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = ProgramUtama::where('id_dirprogutama',$id)->first();
        $renstra = Renstra::all();
        return view('admin.programutama.edit', compact('program','renstra'));
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
            'dirprogutama' => 'required',
            'id_renstra' => 'required',
        ]);

        $input = request()->except(['_token','_method']);
        $program = ProgramUtama::where('id_dirprogutama',$id)->update($input);
        return redirect()->route('programutama.index')->with("success","Data Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        $program = DB::table('dirprogutama')->where('id_dirprogutama',$request->prog_id);
        $program->delete();
        return redirect()->route('programutama.index')->with("success","Data Berhasil Dihapus!");
    }
}
