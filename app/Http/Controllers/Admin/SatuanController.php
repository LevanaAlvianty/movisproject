<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Satuan;
use DB;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = Satuan::all();         
        return view('admin.satuan.index',compact('satuan'));
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
        $satuan = new Satuan();
        $satuan->satuan = $request->satuan;
        $satuan->save();
        return redirect()->route('satuan.index')
                    ->with('success','Satuan Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $satuan = Satuan::where('id_satuan',$id)->first();         
        return view('admin.satuan.show',compact('satuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::where('id_satuan',$id)->first();        
        return view('admin.satuan.edit',compact('satuan'));
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
        $input = request()->except(['_token','_method']);
        $satuans = Satuan::where('id_satuan',$id)->update($input);
        return redirect()->route('satuan.index')
                    ->with('success','Satuan Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $satuan = Satuan::where('id_satuan',$request->satuan_id)->delete();
        return redirect()->route('satuan.index')->with('success','Satuan Berhasil Dihapus!');
    }
}
