<?php

namespace App\Http\Controllers\Spi;

use App\AnggaranPO;
use App\Http\Controllers\Controller;
use App\Jadwalpo;
use App\KegiatanPO;
use App\KelAnggaran;
use App\KelompokAnggaran;
use App\Panitiadalampo;
use App\Panitialuarpo;
use App\Pegawai;
use App\Pejabat;
use App\Pesertapo;
use App\ProgramUtama;
use App\Proposal;
use App\StandartBiaya;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PDF;
use Response;

class ProposalController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
    }

    public function buka($id)
    {   
        $kelang = KelompokAnggaran::all();
        $program = ProgramUtama::all();
        $barang = StandartBiaya::all();
        $pejabat=Pejabat::all();
        $pegawai=Pegawai::all();
        $kegiatan= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama','kelompokanggaran.kelompokanggaran')
                    ->where('kegiatanpo.id',$id)
                    ->first(); 
        $proposal=DB::table('proposal')
                    ->rightJoin('kegiatanpo', 'proposal.id_kegiatan','=', 'kegiatanpo.id')
                    ->select('proposal.*','proposal.id as prop_id')
                    ->where('kegiatanpo.id',$id )
                    ->first(); 
        $anggaranpo= DB::table('standartbiaya')
                    ->join('anggaranpo', 'anggaranpo.id_barang','=', 'standartbiaya.id_standartbiaya')
                    ->join('satuan', 'satuan.id_satuan','=', 'standartbiaya.id_satuan')
                    ->join('kelompok', 'kelompok.id_kelompok','=', 'standartbiaya.id_kelompok')
                    ->join('akun', 'akun.id_akun','=', 'standartbiaya.id_akun')
                    ->select('standartbiaya.namabarang','satuan.satuan','kelompok.kelompok','akun.nama_akun','akun.akun','anggaranpo.id_proposal','anggaranpo.*')
                    ->get();
        $jadwalpo = DB::table('jadwalpo')
                    ->select('jadwalpo.*')
                    ->get();
        $pesertapo = DB::table('pesertapo')
                    ->select('pesertapo.*')
                    ->get();
        $panitiadalampo = DB::table('panitiadalampo')
                    ->select('panitiadalampo.*')
                    ->get();
        $panitialuarpo = DB::table('panitialuarpo')
                    ->select('panitialuarpo.*')
                    ->get();
        return view('spi.proposal.proposal', compact('kelang','program','kegiatan','barang','pegawai','pejabat','proposal','anggaranpo','jadwalpo','pesertapo','panitiadalampo','panitialuarpo'));
    }
  
    public function insert(Request $request, $id)
    {
        $kegiatan=DB::table('proposal')
                ->rightJoin('kegiatanpo', 'proposal.id_kegiatan','=', 'kegiatanpo.id')
                ->where('kegiatanpo.id',$id )
                ->first();
        // $proposalcount=DB::table('proposal')
        //         ->where('proposal.id_kegiatan',$id )
        //         ->count();
                    // ->first();
                    // dd($proposal);
      
        $input = request()->except(['_token','_method','nama_panitialuar','nip_panitialuar','npwp_panitialuar','nama_kegiatan','stat_jan','stat_feb','stat_mar','stat_april','stat_mei','stat_jun','stat_jul','stat_agust','stat_sept','stat_okt','stat_nov','stat_des']);
        if (in_array(null, $input)){
            $proposal = new Proposal;
            $proposal->id_kegiatan = $kegiatan->id;
            $proposal->kodeunit = $request->kodeunit;
            $proposal->judul = $request->judulprop;
            $proposal->namapelaksana = $request->ketuplak;
            $proposal->nip_pelaksana = $request->nip_pelaksana;
            $proposal->mak = $request->mak;
            $proposal->id_kelang = $request->kelang;
            $proposal->thn_anggaran = $request->tahun;
            $proposal->id_dirprogram = $request->acuan;
            $proposal->pagu = $request->pagu;
            $proposal->jk = $request->jk;
            $proposal->jab_struktural = $request->jabstruk;
            $proposal->jab_fungsional = $request->jabfung;
            $proposal->unit_pelaksana = $request->unitpel;
            $proposal->tglmulai = $request->tglmulai;
            $proposal->tglselesai = $request->tglselesai;
            $proposal->tempat = $request->tempat;
            $proposal->target_luaran = $request->luaran;
            $proposal->dampak= $request->dampak;
            $proposal->tgltulis = $request->tgltulis;
            $proposal->jab_unitpelaksana = $request->unitpelaksana;
            $proposal->nama_unitpelaksana = $request->nama_up;
            $proposal->nip_unitpelaksana = $request->nip_up;
            $proposal->jab_wadir1 = $request->wadir_1;
            $proposal->nama_wadir1 = $request->wadir1;
            $proposal->nip_wadir1= $request->nip_wadir1;
            $proposal->jab_wadir2 = $request->wadir_2;
            $proposal->nama_wadir2 = $request->wadir2;
            $proposal->nip_wadir2 = $request->nip_wadir2;
            $proposal->nama_direktur = $request->direktur;
            $proposal->nip_direktur = $request->nip_direktur;
            $proposal->latarbelakang1= $request->latarbelakang1;
            $proposal->latarbelakang2 = $request->latarbelakang2;
            $proposal->latarbelakang3 = $request->latarbelakang3;
            $proposal->luaran_prop = $request->luaran_prop;
            $proposal->mekanisme_prop = $request->mekanisme_prop;
            $proposal->tujuan_prop = $request->tujuan_prop;
            $proposal->penutup_prop = $request->penutup_prop;
            $proposal->status = '0';
            // $id = $proposal->save();
            if($proposal->save()){
                
                foreach($request->barang as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_barang'=>$request->barang[$key],
                        'jml1'=>$request->jml1[$key],
                        'jml2'=>$request->jml2[$key],
                        'jml3'=>$request->jml3[$key],
                        'harga'=>$request->hrg[$key],
                        'total'=>$request->total[$key]);
                    $cek = DB::table('anggaranpo')->insert($data);
                }
            }

            if($cek){
                $id = $proposal->id;
                foreach($request->nama_panitiadlm as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_panitiadalam'=>$request->nama_panitiadlm[$key],
                        'nip'=>$request->nip_panitiadlm[$key],
                        'peran'=>$request->peran_panitiadlm[$key]
                    );
                    $cek1 = DB::table('panitiadalampo')->insert($data);
                }
            }

            if($cek1){
                $id = $proposal->id;
                foreach($request->nama_peserta as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_peserta'=>$request->nama_peserta[$key],
                        'nip'=>$request->nip_peserta[$key],
                        'peran'=>$request->peran_peserta[$key],
                        'golongan'=>$request->gol_peserta[$key],
                        'jabatan'=>$request->jab_peserta[$key]
                    );
                    $cek2 = DB::table('pesertapo')->insert($data);
                }
            }
        
            if($cek2){
                $id = $proposal->id;
                $this->validate($request, [
                    // 'cv_panitialuar' => 'required',
                    'cv_panitialuar.*' => 'mimes:doc,pdf,docx,zip'
                ]);
                
                if($request->hasfile('cv_panitialuar'))
                {
                    $name=$request->file('cv_panitialuar');
                    if(is_array($name))
                    { 
                        $i = 0;
                        foreach($name as $part)
                        { 
                            $i++;
                            $filename=$i.'.'.$part->getClientOriginalName();
                            $part->move(base_path() . '/public/gambar/profil/', $filename);   
                            $cv[] = $filename;
                        }
                    }
                    foreach($request->nama_panitialuar as $key=>$v)
                    { 
                        $data=array(
                            'id_proposal'=>$proposal->id,
                            'nama'=>$request->nama_panitialuar[$key],
                            'nip'=>$request->nip_panitialuar[$key],
                            'npwp'=>$request->npwp_panitialuar[$key],
                            'cv'=>$cv[$key]
                        ); 
                        // dd($data);
                        $cek3 = DB::table('panitialuarpo')->insert($data);
                    }
                }
                else{
                    foreach($request->nama_panitialuar as $key=>$v)
                    { 
                        $data=array(
                            'id_proposal'=>$proposal->id,
                            'nama'=>$request->nama_panitialuar[$key],
                            'nip'=>$request->nip_panitialuar[$key],
                            'npwp'=>$request->npwp_panitialuar[$key],
                        ); 
                        // dd($data);
                        $cek3 = DB::table('panitialuarpo')->insert($data);
                    }
                }
            }  

            if($cek3){
                $id = $proposal->id;
                $data = array();
                // dd($request);
                foreach($request->nama_kegiatan as $key=>$v)
                {
                    $arr=array(
                        'id_proposal'=>$proposal->id,
                        'kegiatan'=>$request->nama_kegiatan[$key],
                        'stat_jan'=>(isset($request->januari[$key]) &&  $request->januari[$key] == 'on') ? 1 : 0,
                        'stat_feb'=>(isset($request->februari[$key]) &&  $request->februari[$key] == 'on') ? 1 : 0,
                        'stat_mar'=>(isset($request->maret[$key]) && $request->maret[$key] == 'on') ? 1 : 0,
                        'stat_april'=>(isset($request->april[$key]) && $request->april[$key] == 'on') ? 1 : 0,
                        'stat_mei'=>(isset($request->mei[$key]) && $request->mei[$key] == 'on') ? 1 : 0,
                        'stat_jun'=>(isset($request->juni[$key]) && $request->juni[$key] == 'on') ? 1 : 0,
                        'stat_jul'=>(isset($request->juli[$key]) && $request->juli[$key] == 'on') ? 1 : 0,
                        'stat_agust'=>(isset($request->agustus[$key]) && $request->agustus[$key] == 'on') ? 1 : 0,
                        'stat_sept'=>(isset($request->september[$key]) && $request->september[$key] == 'on') ? 1 : 0,
                        'stat_okt'=>(isset($request->oktober[$key]) && $request->oktober[$key] == 'on') ? 1 : 0,
                        'stat_nov'=>(isset($request->november[$key]) && $request->november[$key] == 'on') ? 1 : 0,
                        'stat_des'=>(isset($request->desember[$key]) && $request->desember[$key] == 'on') ? 1 : 0,
                    );
                    array_push($data,$arr); 
                }
                $cek = DB::table('jadwalpo')->insert($data);
            }
        }
        else{
            $proposal = new Proposal;
            $proposal->id_kegiatan = $kegiatan->id;
            $proposal->kodeunit = $request->kodeunit;
            $proposal->judul = $request->judulprop;
            $proposal->namapelaksana = $request->ketuplak;
            $proposal->nip_pelaksana = $request->nip_pelaksana;
            $proposal->mak = $request->mak;
            $proposal->id_kelang = $request->kelang;
            $proposal->thn_anggaran = $request->tahun;
            $proposal->id_dirprogram = $request->acuan;
            $proposal->pagu = $request->pagu;
            $proposal->jk = $request->jk;
            $proposal->jab_struktural = $request->jabstruk;
            $proposal->jab_fungsional = $request->jabfung;
            $proposal->unit_pelaksana = $request->unitpel;
            $proposal->tglmulai = $request->tglmulai;
            $proposal->tglselesai = $request->tglselesai;
            $proposal->tempat = $request->tempat;
            $proposal->target_luaran = $request->luaran;
            $proposal->dampak= $request->dampak;
            $proposal->tgltulis = $request->tgltulis;
            $proposal->jab_unitpelaksana = $request->unitpelaksana;
            $proposal->nama_unitpelaksana = $request->nama_up;
            $proposal->nip_unitpelaksana = $request->nip_up;
            $proposal->jab_wadir1 = $request->wadir_1;
            $proposal->nama_wadir1 = $request->wadir1;
            $proposal->nip_wadir1= $request->nip_wadir1;
            $proposal->jab_wadir2 = $request->wadir_2;
            $proposal->nama_wadir2 = $request->wadir2;
            $proposal->nip_wadir2 = $request->nip_wadir2;
            $proposal->nama_direktur = $request->direktur;
            $proposal->nip_direktur = $request->nip_direktur;
            $proposal->latarbelakang1= $request->latarbelakang1;
            $proposal->latarbelakang2 = $request->latarbelakang2;
            $proposal->latarbelakang3 = $request->latarbelakang3;
            $proposal->luaran_prop = $request->luaran_prop;
            $proposal->mekanisme_prop = $request->mekanisme_prop;
            $proposal->tujuan_prop = $request->tujuan_prop;
            $proposal->penutup_prop = $request->penutup_prop;
            $proposal->status = '1';
            // $id = $proposal->save();
            if($proposal->save()){
                
                foreach($request->barang as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_barang'=>$request->barang[$key],
                        'jml1'=>$request->jml1[$key],
                        'jml2'=>$request->jml2[$key],
                        'jml3'=>$request->jml3[$key],
                        'harga'=>$request->hrg[$key],
                        'total'=>$request->total[$key]);
                    $cek = DB::table('anggaranpo')->insert($data);
                }
            }

            if($cek){
                $id = $proposal->id;
                foreach($request->nama_panitiadlm as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_panitiadalam'=>$request->nama_panitiadlm[$key],
                        'nip'=>$request->nip_panitiadlm[$key],
                        'peran'=>$request->peran_panitiadlm[$key]
                    );
                    $cek1 = DB::table('panitiadalampo')->insert($data);
                }
            }

            if($cek1){
                $id = $proposal->id;
                foreach($request->nama_peserta as $key=>$v)
                {
                    $data=array(
                        'id_proposal'=>$proposal->id,
                        'id_peserta'=>$request->nama_peserta[$key],
                        'nip'=>$request->nip_peserta[$key],
                        'peran'=>$request->peran_peserta[$key],
                        'golongan'=>$request->gol_peserta[$key],
                        'jabatan'=>$request->jab_peserta[$key]
                    );
                    $cek2 = DB::table('pesertapo')->insert($data);
                }
            }
        
            if($cek2){
                $id = $proposal->id;
                $this->validate($request, [
                    // 'cv_panitialuar' => 'required',
                    'cv_panitialuar.*' => 'mimes:doc,pdf,docx,zip'
                ]);
                
                if($request->hasfile('cv_panitialuar'))
                {
                    $name=$request->file('cv_panitialuar');
                    if(is_array($name))
                    { 
                        $i = 0;
                        foreach($name as $part)
                        { 
                            $i++;
                            $filename=$i.'.'.$part->getClientOriginalName();
                            $part->move(base_path() . '/public/gambar/profil/', $filename);   
                            $cv[] = $filename;
                        }
                    }
                    foreach($request->nama_panitialuar as $key=>$v)
                    { 
                        $data=array(
                            'id_proposal'=>$proposal->id,
                            'nama'=>$request->nama_panitialuar[$key],
                            'nip'=>$request->nip_panitialuar[$key],
                            'npwp'=>$request->npwp_panitialuar[$key],
                            'cv'=>$cv[$key]
                        ); 
                        // dd($data);
                        $cek3 = DB::table('panitialuarpo')->insert($data);
                    }
                }
                else{
                    foreach($request->nama_panitialuar as $key=>$v)
                    { 
                        $data=array(
                            'id_proposal'=>$proposal->id,
                            'nama'=>$request->nama_panitialuar[$key],
                            'nip'=>$request->nip_panitialuar[$key],
                            'npwp'=>$request->npwp_panitialuar[$key],
                        ); 
                        // dd($data);
                        $cek3 = DB::table('panitialuarpo')->insert($data);
                    }
                }
            }  

            if($cek3){
                $id = $proposal->id;
                $data = array();
                // dd($request);
                foreach($request->nama_kegiatan as $key=>$v)
                {
                    $arr=array(
                        'id_proposal'=>$proposal->id,
                        'kegiatan'=>$request->nama_kegiatan[$key],
                        'stat_jan'=>(isset($request->januari[$key]) &&  $request->januari[$key] == 'on') ? 1 : 0,
                        'stat_feb'=>(isset($request->februari[$key]) &&  $request->februari[$key] == 'on') ? 1 : 0,
                        'stat_mar'=>(isset($request->maret[$key]) && $request->maret[$key] == 'on') ? 1 : 0,
                        'stat_april'=>(isset($request->april[$key]) && $request->april[$key] == 'on') ? 1 : 0,
                        'stat_mei'=>(isset($request->mei[$key]) && $request->mei[$key] == 'on') ? 1 : 0,
                        'stat_jun'=>(isset($request->juni[$key]) && $request->juni[$key] == 'on') ? 1 : 0,
                        'stat_jul'=>(isset($request->juli[$key]) && $request->juli[$key] == 'on') ? 1 : 0,
                        'stat_agust'=>(isset($request->agustus[$key]) && $request->agustus[$key] == 'on') ? 1 : 0,
                        'stat_sept'=>(isset($request->september[$key]) && $request->september[$key] == 'on') ? 1 : 0,
                        'stat_okt'=>(isset($request->oktober[$key]) && $request->oktober[$key] == 'on') ? 1 : 0,
                        'stat_nov'=>(isset($request->november[$key]) && $request->november[$key] == 'on') ? 1 : 0,
                        'stat_des'=>(isset($request->desember[$key]) && $request->desember[$key] == 'on') ? 1 : 0,
                    );
                    array_push($data,$arr); 
                }
                $cek = DB::table('jadwalpo')->insert($data);
            }
        }
        return redirect()->route('kegiatan.index')
                    ->with('success','Data inserted successfully');
    }  

    public function daftar()
    {
        return view('spi.prop_atribut.daftar');
    }

    public function penilaian() //perlu $id agar yang ditampilkan detail penilaian sesuai id proposal
    {
        return view('spi.prop_atribut.penilaian');
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
        return view('spi.daftar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposal = Proposal::with([
                'panitiadalampos',
            ])
            ->find($id);
        
        $kelang = KelompokAnggaran::all();
        $program = ProgramUtama::all();
        $barang = StandartBiaya::all();
        $pejabat=Pejabat::all();
        $pegawai=Pegawai::all();
        $kegiatan= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.kode','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.jurusan','=','kegiatanpo.id_jurbagnitpus')
                    ->leftjoin('kelompokanggaran','kelompokanggaran.kelompokanggaran','=','kegiatanpo.sumber')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nama','kelompokanggaran.kelompokanggaran')
                    ->where('kegiatanpo.id', $proposal->kegiatanpo->id)
                    ->first(); 
        $anggaranpo= DB::table('standartbiaya')
                    ->join('anggaranpo', 'anggaranpo.id_barang','=', 'standartbiaya.id_standartbiaya')
                    ->join('satuan', 'satuan.id_satuan','=', 'standartbiaya.id_satuan')
                    ->join('kelompok', 'kelompok.id_kelompok','=', 'standartbiaya.id_kelompok')
                    ->join('akun', 'akun.id_akun','=', 'standartbiaya.id_akun')
                    ->select('standartbiaya.namabarang','satuan.satuan','kelompok.kelompok','akun.nama_akun','akun.akun','anggaranpo.id_proposal','anggaranpo.*')
                    ->get();
        $jadwalpo = DB::table('jadwalpo')
                    ->select('jadwalpo.*')
                    ->get();
        $pesertapo = DB::table('pesertapo')
                    ->select('pesertapo.*')
                    ->get();
        $panitiadalampo = DB::table('panitiadalampo')
                    ->select('panitiadalampo.*')
                    ->get();
        $panitialuarpo = DB::table('panitialuarpo')
                    ->select('panitialuarpo.*')
                    ->get();
        dump($proposal);

        return view('spi/proposal/proposal', compact('kelang','program','kegiatan','barang','pegawai','pejabat','proposal','anggaranpo','jadwalpo','pesertapo','panitiadalampo','panitialuarpo'));
    }

    public function editproposal()
    {
        $biaya = StandartBiaya::all();
        $anggaran = KelAnggaran::all();
        return view('spi.edit.proposal', compact('biaya','anggaran'));
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
        $proposal = Proposal::find($id);
        
        // $proposalcount=DB::table('proposal')
        //         ->where('proposal.id_kegiatan',$id )
        //         ->count();
                    // ->first();
                    // dd($proposal);
      
        $input = request()->except(['_token','_method','nama_panitialuar','nip_panitialuar','npwp_panitialuar','nama_kegiatan','stat_jan','stat_feb','stat_mar','stat_april','stat_mei','stat_jun','stat_jul','stat_agust','stat_sept','stat_okt','stat_nov','stat_des']);
        dd($input);

        // 1. Proposal save
        $proposal->id_kegiatan = $proposal->kegiatanpo->id;
        $proposal->fill($input);
        $proposal->judul = $request->judulprop;
        $proposal->namapelaksana = $request->ketuplak;
        $proposal->nip_pelaksana = $request->nip_pelaksana;
        $proposal->id_kelang = $request->kelang;
        $proposal->thn_anggaran = $request->tahun;
        $proposal->id_dirprogram = $request->acuan;
        $proposal->jab_struktural = $request->jabstruk;
        $proposal->jab_fungsional = $request->jabfung;
        $proposal->unit_pelaksana = $request->unitpel;
        $proposal->target_luaran = $request->luaran;
        $proposal->jab_unitpelaksana = $request->unitpelaksana;
        $proposal->nama_unitpelaksana = $request->nama_up;
        $proposal->nip_unitpelaksana = $request->nip_up;
        $proposal->jab_wadir1 = $request->wadir_1;
        $proposal->nama_wadir1 = $request->wadir1;
        $proposal->jab_wadir2 = $request->wadir_2;
        $proposal->nama_wadir2 = $request->wadir2;
        $proposal->nama_direktur = $request->direktur;
        $proposal->save();
            
        // 2. Anggaranpo delete and insert
        AnggaranPO::where('id_proposal', $proposal->id)->delete();
        if ($request->barang) {
            foreach ($request->barang as $key=>$v) {
                $data=array(
                    'id_proposal'=>$proposal->id,
                    'id_barang'=>$request->barang[$key],
                    'jml1'=>$request->jml1[$key],
                    'jml2'=>$request->jml2[$key],
                    'jml3'=>$request->jml3[$key],
                    'harga'=>$request->hrg[$key],
                    'total'=>$request->total[$key]);
                $cek = DB::table('anggaranpo')->insert($data);
            }    
        }
        
        // 3. Panitia dalam delete and insert
        Panitiadalampo::where('id_proposal', $proposal->id)->delete();
        if ($request->nama_panitiadlm) {
            foreach($request->nama_panitiadlm as $key=>$v) {
                $data=array(
                    'id_proposal'=>$proposal->id,
                    'id_panitiadalam'=>$request->nama_panitiadlm[$key],
                    'nip'=>$request->nip_panitiadlm[$key],
                    'peran'=>$request->peran_panitiadlm[$key]
                );
                $cek1 = DB::table('panitiadalampo')->insert($data);
            }
        }

        // 4. Peserta delete and insert
        Pesertapo::where('id_proposal', $proposal->id)->delete();
        if($request->nama_peserta){
            foreach($request->nama_peserta as $key=>$v)
            {
                $data=array(
                    'id_proposal'=>$proposal->id,
                    'id_peserta'=>$request->nama_peserta[$key],
                    'nip'=>$request->nip_peserta[$key],
                    'peran'=>$request->peran_peserta[$key],
                    'golongan'=>$request->gol_peserta[$key],
                    'jabatan'=>$request->jab_peserta[$key]
                );
                $cek2 = DB::table('pesertapo')->insert($data);
            }
        }

        // 5. Panitia luar delete and insert
        Panitialuarpo::where('id_proposal', $proposal->id)->delete();
        $this->validate($request, [
            // 'cv_panitialuar' => 'required',
            'cv_panitialuar.*' => 'mimes:doc,pdf,docx,zip'
        ]);
        
        if($request->hasfile('cv_panitialuar'))
        {
            $name=$request->file('cv_panitialuar');
            if(is_array($name))
            { 
                $i = 0;
                foreach($name as $part)
                { 
                    $i++;
                    $filename=$i.'.'.$part->getClientOriginalName();
                    $part->move(base_path() . '/public/gambar/profil/', $filename);   
                    $cv[] = $filename;
                }
            }
            foreach($request->nama_panitialuar as $key=>$v)
            { 
                $data=array(
                    'id_proposal'=>$proposal->id,
                    'nama'=>$request->nama_panitialuar[$key],
                    'nip'=>$request->nip_panitialuar[$key],
                    'npwp'=>$request->npwp_panitialuar[$key],
                    'cv'=>$cv[$key]
                ); 
                // dd($data);
                $cek3 = DB::table('panitialuarpo')->insert($data);
            }
        }
        else{
            foreach($request->nama_panitialuar as $key=>$v)
            { 
                $data=array(
                    'id_proposal'=>$proposal->id,
                    'nama'=>$request->nama_panitialuar[$key],
                    'nip'=>$request->nip_panitialuar[$key],
                    'npwp'=>$request->npwp_panitialuar[$key],
                ); 
                // dd($data);
                $cek3 = DB::table('panitialuarpo')->insert($data);
            }
        }
        
        // 6. Jadwal delete and insert
        Jadwalpo::where('id_proposal', $proposal->id)->delete();
        if ($request->nama_kegiatan) {
            $data = array();
            // dd($request);
            foreach($request->nama_kegiatan as $key=>$v)
            {
                $arr=array(
                    'id_proposal'=>$proposal->id,
                    'kegiatan'=>$request->nama_kegiatan[$key],
                    'stat_jan'=>(isset($request->januari[$key]) &&  $request->januari[$key] == 'on') ? 1 : 0,
                    'stat_feb'=>(isset($request->februari[$key]) &&  $request->februari[$key] == 'on') ? 1 : 0,
                    'stat_mar'=>(isset($request->maret[$key]) && $request->maret[$key] == 'on') ? 1 : 0,
                    'stat_april'=>(isset($request->april[$key]) && $request->april[$key] == 'on') ? 1 : 0,
                    'stat_mei'=>(isset($request->mei[$key]) && $request->mei[$key] == 'on') ? 1 : 0,
                    'stat_jun'=>(isset($request->juni[$key]) && $request->juni[$key] == 'on') ? 1 : 0,
                    'stat_jul'=>(isset($request->juli[$key]) && $request->juli[$key] == 'on') ? 1 : 0,
                    'stat_agust'=>(isset($request->agustus[$key]) && $request->agustus[$key] == 'on') ? 1 : 0,
                    'stat_sept'=>(isset($request->september[$key]) && $request->september[$key] == 'on') ? 1 : 0,
                    'stat_okt'=>(isset($request->oktober[$key]) && $request->oktober[$key] == 'on') ? 1 : 0,
                    'stat_nov'=>(isset($request->november[$key]) && $request->november[$key] == 'on') ? 1 : 0,
                    'stat_des'=>(isset($request->desember[$key]) && $request->desember[$key] == 'on') ? 1 : 0,
                );
                array_push($data,$arr); 
            }
            DB::table('jadwalpo')->insert($data);
        }
        
        // 7.1 If each has empty then do notning
        if (in_array(null, $input)) {
        } else { // 2.2 If all is filled, update status become submitted
            $proposal->status = 1;
            $proposal->save();
        }
        
        // dd($proposal);
        return redirect()->route('kegiatan.index')
                    ->with('success', 'Data update successfully');
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

    public function ViewPDF($id)
    {
        $proposal= DB::table('proposal')
                    ->join('kegiatanpo','kegiatanpo.id','=','proposal.id_kegiatan')
                    ->join('dirprogutama','dirprogutama.id_dirprogutama','=','proposal.id_dirprogram')
                    ->join('kelompokanggaran','kelompokanggaran.id_kelang','=','proposal.id_kelang')
                    ->select('proposal.*','kegiatanpo.*','dirprogutama.dirprogutama','kelompokanggaran.kelompokanggaran','proposal.id as prop_id')
                    ->where('kegiatanpo.id',$id)
                    ->first(); 
        $anggaranpo= DB::table('standartbiaya')
                    ->join('anggaranpo', 'anggaranpo.id_barang','=', 'standartbiaya.id_standartbiaya')
                    ->join('satuan', 'satuan.id_satuan','=', 'standartbiaya.id_satuan')
                    ->join('kelompok', 'kelompok.id_kelompok','=', 'standartbiaya.id_kelompok')
                    ->join('akun', 'akun.id_akun','=', 'standartbiaya.id_akun')
                    ->select('standartbiaya.namabarang','satuan.satuan','kelompok.kelompok','akun.nama_akun','akun.akun','anggaranpo.id_proposal','anggaranpo.*')
                    ->get();
        $jadwalpo = DB::table('jadwalpo')->select('jadwalpo.*')->get();
        $pesertapo = DB::table('pesertapo')
                    ->join('pegawai', 'pegawai.id_pegawai','=', 'pesertapo.id_peserta')
                    ->select('pesertapo.*','pegawai.nama')->get();
        $panitiadalampo = DB::table('panitiadalampo') 
                        ->join('pegawai', 'pegawai.id_pegawai','=', 'panitiadalampo.id_panitiadalam')
                        ->select('panitiadalampo.*','pegawai.nama')->get();
        $panitialuarpo = DB::table('panitialuarpo')
                        ->select('panitialuarpo.*')->get();
        $prop= DB::table('proposal')->select('proposal.id as prop_id')->get();
        // $tes = $prop[0];dd($tes);
        $total = DB::table('anggaranpo')
                ->join('proposal','anggaranpo.id_proposal','=','proposal.id')
                ->select(DB::raw('sum(total) as total_biaya'))
                ->groupBy('anggaranpo.id_proposal')
                ->where('anggaranpo.id_proposal','=',$proposal->prop_id)         
                ->get();
               
        // dd($proposal);
        $pdf = PDF::loadView('spi.kegiatan.prop-pdf', ['proposal'=>$proposal,'anggaranpo'=>$anggaranpo,
            'jadwalpo'=>$jadwalpo,'pesertapo'=>$pesertapo,'panitiadalampo'=>$panitiadalampo,
            'panitialuarpo'=>$panitialuarpo,'total'=>$total])
            ->setPaper('a4','portrait');
        return $pdf->stream();
        // return view ('spi.kegiatan.prop-pdf', ['proposal'=>$proposal,'anggaranpo'=>$anggaranpo,'jadwalpo'=>$jadwalpo,'pesertapo'=>$pesertapo,'panitiadalampo'=>$panitiadalampo,'panitialuarpo'=>$panitialuarpo]);
    }

    public function viewPdf2($idKegiatan)
    {
        $data['proposal'] = $proposal = Proposal::where('id_kegiatan', $idKegiatan)->first();
        // dump($data);
        // return view('spi/kegiatan/prop-pdf2', $data);
        $pdf = PDF::loadView('spi/kegiatan/prop-pdf2', $data);
        return $pdf->stream();
    }
    
    public function findData(Request $request)
    {
        $data=Pejabat::select('name','nip')->where('jabatan',$request->id)->first();
        return response()->json($data);
    }

    public function findBarang(Request $request)
    {
        $data=StandartBiaya::select('hargasatuan')->where('id_standartbiaya',$request->id_standartbiaya)->first();
        return response()->json($data);
    }

    public function findPanitiaDalam(Request $request)
    {
        $data=Pegawai::select('nip')->where('id_pegawai',$request->id_pegawai)->first();
        return response()->json($data);
    }

    public function findPeserta(Request $request)
    {
        $data=Pegawai::select('nip','golongan','jabatan')->where('id_pegawai',$request->id_pegawai)->first();
        return response()->json($data);
    }
    
}
