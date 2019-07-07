<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pegawai;
use App\Role;
use DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai= $users = DB::table('pegawai_role')
                ->join('pegawai', 'pegawai.id_pegawai', '=', 'pegawai_role.pegawai_id')
                ->join('roles', 'roles.id', '=', 'pegawai_role.role_id')
                ->select('pegawai.*', 'roles.name')
                ->get();
        return view('admin.user.index',compact('pegawai'));
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
            'nama' => 'required',
            'nip' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $role_pegawai = Role::where('name', $request->role)->first();
        $pegawai = new Pegawai();
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->golongan = $request->golongan;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();
        $pegawai->roles()->attach($role_pegawai);
        return redirect()->route('pegawai.index');
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
        $pegawai = Pegawai::find($id);
        return view('admin.user.edit',compact('pegawai'));
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
            'nama' => 'required',
            'nip' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required',
            'username' => 'required',
        ]);

        $data = $request->all();

        $pegawai = Pegawai::find($id);
        $pegawai->update($data);
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pegawai = Pegawai::findOrfail($request->user_id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
