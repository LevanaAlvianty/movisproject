<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pegawai;
use App\Role;
use DB;
use Hash;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('pegawai');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index(Request $request)
    {
        
        $pegawai=Pegawai::all();         
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
            'username' => 'required',
            'role' => 'required',
            'password' => 'required|min:8|same:password_confirmation',
        ]);

        $role_pegawai = Role::where('name', $request->role)->first();
        $pegawai = new Pegawai();
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->username = $request->username;
        $pegawai->golongan = $request->golongan;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();
        $pegawai->roles()->attach($role_pegawai);

        return redirect()->route('pegawai.index')
                    ->with('success','User created successfully');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('admin.user.show', compact('pegawai'));
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
        $peran = Role::all();
        return view('admin.user.edit',compact('pegawai','peran'));
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
            'role' => 'required',
            'password' => 'same:password_confirmation',
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password')); //remove given key or value  
        }

        $pegawai = Pegawai::find($id);
        $pegawai->update($input);
        DB::table('pegawai_role')->where('pegawai_id',$id)->delete();

        foreach ($request->input('role') as $key => $value) {
            $pegawai->roles()->attach($value);
        }
        return redirect()->route('pegawai.index')
                        ->with('success','User updated successfully');
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
        return redirect()->route('pegawai.index')->with('success','User deleted successfully');;
    }
}
