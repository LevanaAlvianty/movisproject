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
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $renstra = Renstra::all();
        $program = ProgramUtama::all();
        // $renstra = DB::table('renstra')
        //             ->join('dirprogutama', 'dirprogutama.id_renstra', '=', 'renstra.id_renstra')
        //             ->select('renstra.*', 'dirprogutama.dirprogutama')
        //             ->groupBy('renstra.renstra')
        //             ->get();
                    // dd($renstra);
        return view('admin.renstra.index',compact('renstra','program'));
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
            'renstra' => 'required',
            'tahun_penetapan' => 'required',
            'status' => 'required',
        ]);

        $renstra = new Renstra();
        $renstra->renstra = $request->renstra;
        $renstra->tahun_penetapan = $request->tahun_penetapan;
        $renstra->status = $request->status;
        $renstra->save();

        return redirect()->route('programutama.index')
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
        $renstra = Renstra::where('id_renstra',$id)->first();
        return view('admin.renstra.edit', compact('renstra'));
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
    public function destroy(Request $request)
    {   
        $renstra = DB::table('renstra')->where('id_renstra',$request->id_renstra);
        $renstra->delete();
        return redirect()->route('programutama.index')->with("success","Data Deleted Successfully!");
    }
}
