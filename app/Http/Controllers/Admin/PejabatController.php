<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pejabat;
use DB;

class PejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabat = Pejabat::all();         
        return view('admin.pejabat.index',compact('pejabat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
        ]);

        $pejabat = new Pejabat();
        $pejabat->nip = $request->nip;
        $pejabat->name = $request->name;
        $pejabat->jabatan = $request->jabatan;
        $pejabat->save();

        return redirect()->route('pejabat.index')
                    ->with('success','Pejabat Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pejabat = Pejabat::find($id);
        return view('admin.pejabat.show', compact('pejabat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pejabat = Pejabat::find($id);
        return view('admin.pejabat.edit', compact('pejabat'));
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
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
        ]);

        $pejabat = Pejabat::find($id);
        $pejabat->nip = $request->nip;
        $pejabat->name = $request->name;
        $pejabat->jabatan = $request->jabatan;
        $pejabat->update();

        return redirect()->route('pejabat.index')
                    ->with('success','Pejabat Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pejabat = Pejabat::findOrfail($request->pejabat_id);
        $pejabat->delete();
        return redirect()->route('pejabat.index')->with('success','Pejabat Berhasil Dihapus!');
    }
}
