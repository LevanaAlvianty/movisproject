<?php

namespace App\Http\Controllers\AdminPerencanaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\KegiatanpoImport;
use App\Exports\KegiatanpoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\KegiatanPO;
use App\Kodeunit;
use DB;
use Session;
use App\Jobs\ImportJob;

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
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode')
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
        return view('adm-perencanaan.kegiatanpo.create',compact('kodeunit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $kodeunit = Kodeunit::where('kode', $request->id_jurbagnitpus)->first();
        $kegiatanpo = new KegiatanPO();
        $kegiatanpo->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanpo->nip_pic = $request->nip_pic;
        $kegiatanpo->reviewer_spi = $request->reviewer_spi;
        $kegiatanpo->reviewer_ang = $request->reviewer_ang;
        $kegiatanpo->save();
        $kegiatanpo->kodeunit()->associate($kodeunit);
        return redirect()->route('kegiatanpo.index');
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
        // $jurbagnitpus= DB::table('kegiatanpo')
        //             ->join('jurbagnitpus','jurbagnitpus.id_jurbagnitpus','=','kegiatanpo.id_jurbagnitpus')
        //             ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode')
        //             ->orderBy('kegiatanpo.id','desc')
        //             ->first(); 
        return view('adm-perencanaan.kegiatanpo.show', compact('kegiatanpo'));
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
        //
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

            //MEMBUAT FILENAME DENGAN MENGAMBIL EKSTENSI DARI FILE YANG DI-UPLOAD
            $filename = time() . '.' . $file->getClientOriginalExtension();

            
            //FILE TERSEBUT DISIMPAN KEDALAM FOLDER
            // STORAGE > APP > PUBLIC > FILE_KEGIATANPO
            //DENGAN MENGGUNAKAN METHOD storeAs()
            $file->storeAs(
                'public/file_kegiatanpo/', $filename
            );
            
            //MEMBUAT JOBS DENGAN MENGIRIMKAN PARAMETER FILENAME
            //MEMBUAT INSTRUKSI JOB QUEUE
            ImportJob::dispatch($filename);
            //REDIRECT DENGAN FLASH MESSAGE BERHASIL
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
        
	}
}
