<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KelompokAkun;
use App\Akun;
use DB;

class KelompokAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $kelompok = KelompokAkun::all();
        $akun = Akun::all();
        return view('admin.kelompok-akun.index',compact('kelompok','akun'));
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
            'kelompok' => 'required',
            'id_akun' => 'required',
        ]);

        $kelompok = new KelompokAkun();
        $kelompok->kelompok = $request->kelompok;
        $kelompok->id_akun = $request->id_akun;
        $kelompok->save();

        return redirect()->route('kelompok-akun.index')
                    ->with('success','Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelompok = KelompokAkun::where('id_kelompok',$id)->first();
        $akun = Akun::all();
        return view('admin.kelompok-akun.show', compact('kelompok','akun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelompok = KelompokAkun::where('id_kelompok',$id)->first();
        $akun = Akun::all();
        return view('admin.kelompok-akun.edit', compact('kelompok','akun'));
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
            'kelompok' => 'required',
            'id_akun' => 'required',
        ]);

        $input = request()->except(['_token','_method']);
        $kelompok = KelompokAkun::where('id_kelompok',$id)->update($input);
        return redirect()->route('kelompok-akun.index')->with("success","Data Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        $kelompok = DB::table('kelompok')->where('id_kelompok',$request->kelompok_id);
        $kelompok->delete();
        return redirect()->route('kelompok-akun.index')->with("success","Data Deleted Successfully!");
    }
}
