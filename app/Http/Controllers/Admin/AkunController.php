<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Akun;
use DB;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns = Akun::all();         
        return view('admin.akun.index',compact('akuns'));
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
            'akun' => 'required',
            'nama_akun' => 'required',
        ]);

       $akuns = new Akun();
       $akuns->akun = $request->akun;
       $akuns->nama_akun = $request->nama_akun;
       $akuns->ket_akun = $request->ket_akun;
       $akuns->save();

        return redirect()->route('akun.index')
                    ->with('success','Akun created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $akun = Akun::where('id_akun',$id)->first();
        return view('admin.akun.show', compact('akun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $akun = Akun::where('id_akun',$id)->first();
        return view('admin.akun.edit', compact('akun'));
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
            'akun' => 'required',
            'nama_akun' => 'required',
        ]);
        $input = request()->except(['_token','_method']);
        $akun = Akun::where('id_akun',$id)->update($input);

        return redirect()->route('akun.index')
                    ->with('success','Akun updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $akun = Akun::where('id_akun',$request->akun_id)->delete();
        return redirect()->route('akun.index')->with('success','Akun deleted successfully');
    }
}
