<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use App\Pegawai;
use DB;
use Auth;

class ProfilController extends Controller
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
    public function index()
    {
        return view('profil.index');
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
        //
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
        //
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
            'username' => 'required', 
            'jk' => 'required',
            'email' => 'required|email',
            'photo' => 'mimes:jpeg,png,jpg,gif'
        ]);

        $data = $request->all(); 
        if($request->hasFile('photo')) {
             // get file name
             $photo = $request->file('photo')->getClientOriginalName();
             // move file
             $destination = base_path() . '/public/gambar/profil';
             $request->file('photo')->move($destination, $photo);
 
             $data = $request->all();
             $data['photo'] = $photo;
        }
        $profil = Pegawai::find($id);
        $profil->update($data);
        return redirect()->route('profil.index')->with("success","Profil changed successfully !");
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::guard('pegawai')->user()->password))) {
            // The passwords matches
            return redirect()->route('profil.index')->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        //strcmp:membandingkan password
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->route('profil.index')->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::guard('pegawai')->user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('profil.index')->with("success","Password changed successfully !");

    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
