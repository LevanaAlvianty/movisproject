<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KelompokAnggaran;
use DB;

class KelompokAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelang = KelompokAnggaran::all();         
        return view('admin.kelompokanggaran.index',compact('kelang'));
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
            'kelompokanggaran' => 'required',
        ]);

        $kelang = new KelompokAnggaran();
        $kelang->kelompokanggaran = $request->kelompokanggaran;
        $kelang->save();

        return redirect()->route('kelang.index')
                    ->with('success','Kelompok Anggaran Berhasil Dibuat!');
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
        $kelang = DB::table('kelompokanggaran')->where('id_kelang',$id)->first();
        // $kelang = KelompokAnggaran::find($id);
        // dd($kelang);
        return view('admin.kelompokanggaran.edit', compact('kelang'));
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
            'kelompokanggaran' => 'required',
        ]);

        $kelang = DB::table('kelompokanggaran')->where('id_kelang',$id)
                ->update(
                    ['kelompokanggaran' => $request->kelompokanggaran]
                );
        return redirect()->route('kelang.index')
                    ->with('success','Kelompok Anggaran Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kelang = DB::table('kelompokanggaran')->where('id_kelang',$request->kelang_id);
        $kelang->delete();
        return redirect()->route('kelang.index')->with('success','Kelompok Anggaran Berhasil Dihapus!');
    }
}
