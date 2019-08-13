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
                    ->leftJoin('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode')
                    ->orderBy('kegiatanpo.tahun','desc')
                    ->orderBy('kegiatanpo.id','asc')
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
        $kelang = DB::table('kelompokanggaran')->select('kelompokanggaran.*')->get();
        return view('adm-perencanaan.kegiatanpo.create',compact('kodeunit','kelang'));
        // dd($kodeunit);
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
            'kode_akun' => 'required',
            'kelang' => 'required',
            'nama_kegiatan' => 'required',
            'id_jurbagnitpus' => 'required',
            'tahun' => 'required',
        ]);

        $kegiatanpo = new KegiatanPO();
        $kegiatanpo->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanpo->id_jurbagnitpus = $request->id_jurbagnitpus;
        $kegiatanpo->kode_akun = $request->kode_akun;
        $kegiatanpo->sumber = $request->kelang;
        $kegiatanpo->mak_521114 = $request->mak_521114;
        $kegiatanpo->mak_521211 = $request->mak_521211;
        $kegiatanpo->mak_521213 = $request->mak_521213;
        $kegiatanpo->mak_521219 = $request->mak_521219;
        $kegiatanpo->mak_521811 = $request->mak_521811;
        $kegiatanpo->mak_522114 = $request->mak_522114;
        $kegiatanpo->mak_522141 = $request->mak_522141;
        $kegiatanpo->mak_522151 = $request->mak_522151;
        $kegiatanpo->mak_524114 = $request->mak_524114;
        $kegiatanpo->mak_524119 = $request->mak_524119;
        $kegiatanpo->mak_532111 = $request->mak_532111;
        $kegiatanpo->mak_536111 = $request->mak_536111;
        $kegiatanpo->tahun = $request->tahun;
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
        // $result = KegiatanPO::select('`521114` as column_a','`521211` as column_b')
        //         ->whereId($id)->sum(function($row){
        //     return $row->column_a + $row->column_b;
        //  });
        // });+ $row->{'521213'} + $row->{'521219'} + $row->{'521811'} + $row->{'522114'} + $row->{'522141'} + $row->{'522151'} + $row->{'524114'} + $row->{'524119'} + $row->{'532111'} + $row->{'536111'}
        // $kodeunit = Kodeunit::all();

        $kegiatanpo= DB::table('kegiatanpo')
                    ->leftJoin('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','kelompokanggaran.kelompokanggaran')
                    ->where('kegiatanpo.id','=',$id)
                    ->first(); 

        // $total = DB::table('kegiatanpo')
        //              ->select('521114','521211','521213','521219','521811','522114','522141','522151','524114','524119','532111','536111')
        //              ->where('id',$id)
        //              ->first();
        // $total = DB::table('kegiatanpo')
        //         ->select( DB::raw(' 521114+521211+521213+521219+521811+522114+522141+522151+524114+524119+532111+536111') )
        //         ->where('id','=',$id)->get();
                
    // dd($kegiatan);
        return view('adm-perencanaan.kegiatanpo.lihat', compact('kegiatanpo','total'));
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
        $kelang = DB::table('kelompokanggaran')->select('kelompokanggaran.*')->get();
        return view('adm-perencanaan.kegiatanpo.edit',compact('kegiatanpo','kodeunit','kelang'));
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
            'kode_akun' => 'required',
            'kelang' => 'required',
            'nama_kegiatan' => 'required',
            'id_jurbagnitpus' => 'required',
            'tahun' => 'required',
        ]);

        $kegiatanpo = KegiatanPO::find($id);
        $kegiatanpo->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanpo->id_jurbagnitpus = $request->id_jurbagnitpus;
        $kegiatanpo->kode_akun = $request->kode_akun;
        $kegiatanpo->sumber = $request->kelang;
        $kegiatanpo->mak_521114 = $request->mak_521114;
        $kegiatanpo->mak_521211 = $request->mak_521211;
        $kegiatanpo->mak_521213 = $request->mak_521213;
        $kegiatanpo->mak_521219 = $request->mak_521219;
        $kegiatanpo->mak_521811 = $request->mak_521811;
        $kegiatanpo->mak_522114 = $request->mak_522114;
        $kegiatanpo->mak_522141 = $request->mak_522141;
        $kegiatanpo->mak_522151 = $request->mak_522151;
        $kegiatanpo->mak_524114 = $request->mak_524114;
        $kegiatanpo->mak_524119 = $request->mak_524119;
        $kegiatanpo->mak_532111 = $request->mak_532111;
        $kegiatanpo->mak_536111 = $request->mak_536111;
        $kegiatanpo->tahun = $request->tahun;
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
            'file' => 'required|mimes:xls,xlsx',
            'tahun'=>'required'
        ]);

        // $kegiatan = KegiatanPO::all();
        
        if ($request->hasFile('file')) {
            //GET FILE
            $file = $request->file('file');
            
            $filename = date('YmdHis',time()).'_'.$file->getClientOriginalName();
 
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_kegiatanpo',$filename);
 
            // import data
		    Excel::import(new KegiatanpoImport, public_path('file_kegiatanpo/'.$filename));
           
            //MENGISI KOLOM TAHUN 
            DB::table('kegiatanpo')->where('tahun', NULL)->update(['tahun' => $request->tahun]);
           
            //REDIRECT DENGAN FLASH MESSAGE BERHASIL
            return redirect()->back()->with(['success' => 'Upload Berhasil']);
        }  
        return redirect()->back()->with(['error' => 'Pilih file yang ingin diupload terlebih dahulu']);
        
    }
}
