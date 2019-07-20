<?php

namespace App\Http\Controllers\Spi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\KegiatanPO;
use App\ProgramUtama;
use App\KelompokAnggaran;
use App\Pejabat;
use App\Pegawai;
use App\Proposal;
use App\AnggaranPO;
use App\StandartBiaya;
use DB;
use Auth;
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
        $user= Auth::guard('pegawai')->user()->nip;
        $kegiatan= DB::table('kegiatanpo')
                    ->join('jurbagnitpus','jurbagnitpus.id_jurbagnitpus','=','kegiatanpo.id_jurbagnitpus')
                    ->join('pegawai','pegawai.nip','=','kegiatanpo.nip_pic')
                    ->select('kegiatanpo.*','jurbagnitpus.jurbagnitpus','jurbagnitpus.kode','pegawai.nip','pegawai.nama')
                    ->where('kegiatanpo.id','=',$id )
                    ->first();   
        $barang = StandartBiaya::all();
        $anggaran=AnggaranPO::all();
        $pejabat=Pejabat::all();
        $pegawai=Pegawai::all();
        return view('spi.proposal.proposal', compact('kelang','program','kegiatan','barang','anggaran','pegawai','pejabat'));
    }

    public function insert(Request $request, $id)
    {
        $user= Auth::guard('pegawai')->user()->nip;
        $kegiatan=DB::table('proposal')
                        ->rightJoin('kegiatanpo', 'proposal.id_kegiatan','=', 'kegiatanpo.id')
                        ->where('kegiatanpo.id',$id )
                        ->first();
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
        // $id = $proposal->save();
        if($proposal->save()){
            $id = $proposal->id;
    
            foreach($request->barang as $key=>$v)
            {
                $data=array(
                    'id_proposal'=>$id,
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
                    'id_proposal'=>$id,
                    'id_panitiadalam'=>$request->nama_panitiadlm[$key],
                    'nip'=>$request->nip_panitiadlm[$key],
                    'peran'=>$request->peran_panitiadlm[$key]
                );
                $cek = DB::table('panitiadalampo')->insert($data);
            }
        }

        if($cek){
            $id = $proposal->id;
            foreach($request->nama_peserta as $key=>$v)
            {
                $data=array(
                    'id_proposal'=>$id,
                    'id_peserta'=>$request->nama_peserta[$key],
                    'nip'=>$request->nip_peserta[$key],
                    'peran'=>$request->peran_peserta[$key],
                    'golongan'=>$request->gol_peserta[$key],
                    'jabatan'=>$request->jab_peserta[$key]
                );
                $cek = DB::table('pesertapo')->insert($data);
            }
        }
    

        if($cek){
            $id = $proposal->id;
            $this->validate($request, [
                'file' => 'file'
            ]);
            foreach($request->nama_panitialuar as $key=>$v)
            {
                $data = $request->all(); 
                if($request->hasFile('cv_panitialuar[]')) {
                    // get file name
                    $cv = $request->file('cv_panitialuar[]')->getClientOriginalName();
                    // move file
                    $destination = base_path() . '/public/gambar/profil/';
                    $request->file('cv_panitialuar[]')->move($destination, $cv);
        
                    $data=array(
                        'id_proposal'=>$id,
                        'nama'=>$request->nama_panitialuar[$key],
                        'nip'=>$request->nip_panitialuar[$key],
                        'npwp'=>$request->npwp_panitialuar[$key],
                        'cv'=>$cv
                    );
                }
                else {
                $data=array(
                    'id_proposal'=>$id,
                    'nama'=>$request->nama_panitialuar[$key],
                    'nip'=>$request->nip_panitialuar[$key],
                    'npwp'=>$request->npwp_panitialuar[$key],
                    'cv'=>$request->cv_panitialuar[$key]
                );
            }
                $cek = DB::table('panitialuarpo')->insert($data);
            }
        }

        if($cek){
            $id = $proposal->id;
            foreach($request->nama_kegiatan as $key=>$v)
            {
                $data=array(
                    'id_proposal'=>$id,
                    'kegiatan'=>$request->nama_kegiatan[$key],
                    'stat_jun'=>$request->januari[$key],
                    'stat_feb'=>$request->februari[$key],
                    'stat_mar'=>$request->maret[$key],
                    'stat_april'=>$request->april[$key],
                    'stat_mei'=>$request->mei[$key],
                    'stat_jun'=>$request->juni[$key],
                    'stat_jul'=>$request->juli[$key],
                    'stat_agust'=>$request->agustus[$key],
                    'stat_sept'=>$request->september[$key],
                    'stat_okt'=>$request->oktober[$key],
                    'stat_nov'=>$request->november[$key],
                    'stat_des'=>$request->desember[$key]
                );
                $cek = DB::table('jadwalpo')->insert($data);
            }
        }
// dd($request->all());
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
        //
        // $pemesan = User::find($id);
        // $role = Role::all();
        // return view('admin.pemesan.edit',compact('pemesan','role'));
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
