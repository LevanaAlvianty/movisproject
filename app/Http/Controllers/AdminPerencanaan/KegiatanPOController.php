<?php

namespace App\Http\Controllers\AdminPerencanaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\KegiatanpoImport;
use App\Exports\KegiatanpoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\KegiatanPO;
use App\Kodeunit;
use App\Pegawai;
use DB;
use Response;

class KegiatanPOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatanpo= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.id_jurbagnitpus','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.nip','=','kegiatanpo.pimpinan')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama')
                    ->orderBy('kegiatanpo.id','desc')
                    ->get(); 
        return view('adm-perencanaan.kegiatanpo.index',compact('kegiatanpo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kodeunit = Kodeunit::all();
        $pegawai = DB::table('pegawai')
                ->select('pegawai.*')
                ->where('pegawai.nama','!=','')
                ->get();
        // dd($kodeunit);
        return view('adm-perencanaan.kegiatanpo.create',compact('kodeunit','pegawai'));
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
            'nama_kegiatan' => 'required',
            'id_jurbagnitpus' => 'required',
            'pimpinan' => 'required',
        ]);

        $kegiatanpo = new KegiatanPO();
        $kegiatanpo->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanpo->id_jurbagnitpus = $request->id_jurbagnitpus;
        $kegiatanpo->pimpinan = $request->pimpinan;
        $kegiatanpo->nip_pic = $request->nip_pic;
        $kegiatanpo->reviewer_spi = $request->reviewer_spi;
        $kegiatanpo->reviewer_ang = $request->reviewer_ang;
        $kegiatanpo->save();
        return redirect()->route('kegiatanpo.index')->with("success","Data Berhasil Ditambahkan !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatanpo= KegiatanPO::find($id);
        $kodeunit = Kodeunit::all();
        $pegawai = Pegawai::all();
        return view('adm-perencanaan.kegiatanpo.lihat', compact('kegiatanpo','kodeunit','pegawai'));
        // $kegiatanpo = DB::table('kegiatanpo')
        //             ->join('jurbagnitpus', 'jurbagnitpus.id_jurbagnitpus', '=', 'kegiatanpo.id_jurbagnitpus')
        //             ->join('pegawai', 'pegawai.nip', '=', 'kegiatanpo.nip_pic')
        //             ->select('kegiatanpo.*', 'jurbagnitpus.id_jurbagnitpus as idj','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama')
        //             ->where('kegiatanpo.id', '=', $id)
        //             ->first();
		// return response()->json($kegiatanpo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatanpo = KegiatanPO::find($id);
        $kodeunit = Kodeunit::all();
        $pegawai = DB::table('pegawai')
                ->select('pegawai.*')
                ->where('pegawai.nama','!=','')
                ->get();
        return view('adm-perencanaan.kegiatanpo.edit',compact('kegiatanpo','kodeunit','pegawai'));
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
        $kegiatanpo = KegiatanPO::find($id);
        $kegiatanpo->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanpo->id_jurbagnitpus = $request->id_jurbagnitpus;
        $kegiatanpo->pimpinan = $request->pimpinan;
        $kegiatanpo->nip_pic = $request->nip_pic;
        $kegiatanpo->reviewer_spi = $request->reviewer_spi;
        $kegiatanpo->reviewer_ang = $request->reviewer_anggaran;
        $kegiatanpo->update();
        return redirect()->route('kegiatanpo.index')->with("success","Data Berhasil Diperbarui !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kegiatanpo = KegiatanPO::findOrfail($request->kegiatan_id);
        $kegiatanpo->delete();
        return redirect()->route('kegiatanpo.index')->with("success","Data Berhasil Dihapus!");
    }

    public function export_excel()
	{
		return Excel::download(new KegiatanpoExport, 'kegiatan-po.xlsx');
	}

    public function import_excel(Request $request) 
	{
		//VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            //GET FILE
            $file = $request->file('file');
            
            $filename = rand().'_'.$file->getClientOriginalName();
 
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_kegiatanpo',$filename);
 
            // import data
		    Excel::import(new KegiatanpoImport, public_path('file_kegiatanpo/'.$filename));
           //MENGHAPUS FILE EXCEL YANG TELAH DI-UPLOAD
        
            //REDIRECT DENGAN FLASH MESSAGE BERHASIL
            return redirect()->back()->with(['success' => 'Upload Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Pilih file yang ingin diupload terlebih dahulu']);
        
    }
}
