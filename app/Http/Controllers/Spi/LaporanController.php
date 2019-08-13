<?php

namespace App\Http\Controllers\Spi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Indikatorpo;
use App\KegiatanPO;
use App\KelompokAnggaran;
use App\Laporan;
use App\Pegawai;
use App\Pejabat;
use App\Pesertapo;
use App\ProgramUtama;
use App\Proposal;
use PDF;
use DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['laporan'] = Laporan::with('proposal')
                        ->orderBy('thn_anggaran','desc')
                        ->orderBy('id','asc')->get();
        return view('spi/index-laporan',$data);
    }

    public function buatLaporan($id)
    {
        $data['kegiatanpo'] = KegiatanPO::with('jurbagnitpus')->where('id',$id)->first();
        $data['kelompokanggaran'] = KelompokAnggaran::all();
        $data['pegawai'] = Pegawai::all();
        $data['pejabat'] = Pejabat::all();
        $data['proposal'] = Proposal::where('id_kegiatan',$id)->first();
        $data['programutama'] = ProgramUtama::all();
        $data['laporan'] = new Laporan;
        return view('spi/laporan/laporan', $data);
    }

    public function simpanLaporan(Request $request, $idKegiatan)
    {
        $proposal= Proposal::where('id_kegiatan',$idKegiatan)->first();
        $this->validate($request, [
            'foto_laporan' => 'mimes:pdf|max:2048',
            'surat_laporan' => 'mimes:pdf|max:2048',
            'luaran_laporan' => 'mimes:pdf|max:2048',
            'materi_laporan' => 'mimes:pdf|max:2048',
            'berita_laporan' => 'mimes:pdf|max:2048',
        ]);
        
        $foto = $request->input('foto_laporan_hidden');
        if ($request->hasFile('foto_laporan')) 
        {
            $filefoto = $request->file('foto_laporan');
            $filefoto_name = date('YmdHis',time()).'_'.$filefoto->getClientOriginalName();
            $filefoto->move(base_path() . '/public/laporan/file-foto/',$filefoto_name);

            $foto = $filefoto_name;
        }

        $surat = $request->input('surat_laporan_hidden');
        if ($request->hasFile('surat_laporan')) 
        {
            $filesurat = $request->file('surat_laporan');
            $filesurat_name = date('YmdHis',time()).'_'.$filesurat->getClientOriginalName();
            $filesurat->move(base_path() . '/public/laporan/file-surat/',$filesurat_name);

            $surat = $filesurat_name;
        }

        $materi = $request->input('materi_laporan_hidden');
        if ($request->hasFile('materi_laporan')) 
        {
            $filemateri = $request->file('materi_laporan');
            $filemateri_name = date('YmdHis',time()).'_'.$filemateri->getClientOriginalName();
            $filemateri->move(base_path() . '/public/laporan/file-materi/',$filemateri_name);

            $materi = $filemateri_name;
        }

        $luaran = $request->input('luaran_laporan_hidden');
        if ($request->hasFile('luaran_laporan')) 
        {
            $fileluaran = $request->file('luaran_laporan');
            $fileluaran_name = date('YmdHis',time()).'_'.$fileluaran->getClientOriginalName();
            $fileluaran->move(base_path() . '/public/laporan/file-luaran/',$fileluaran_name);

            $luaran = $fileluaran_name;
        }

        $berita = $request->input('berita_laporan_hidden');
        if ($request->hasFile('berita_laporan')) 
        {
            $fileberita = $request->file('berita_laporan');
            $fileberita_name = date('YmdHis',time()).'_'.$fileberita->getClientOriginalName();
            $fileberita->move(base_path() . '/public/laporan/file-berita/',$fileberita_name);

            $berita = $fileberita_name;
        }

        $input = request()->except(['_token','_method','alasan_peserta','foto_laporan','surat_laporan',
        'materi_laporan','berita_laporan','luaran_laporan','foto_laporan_hidden','surat_laporan_hidden',
        'materi_laporan_hidden','berita_laporan_hidden','luaran_laporan_hidden']);
        
        // 1. Laporan save
        $laporan = new Laporan;
        $laporan->id_proposal = $proposal->id;
        $laporan->id_kegiatan = $idKegiatan;
        $laporan->fill($input);
        $laporan->foto_laporan = $foto;
        $laporan->surat_laporan = $surat;
        $laporan->materi_laporan = $materi;
        $laporan->luaran_laporan = $luaran;
        $laporan->berita_laporan = $berita;
        $laporan->status = '0';
        $laporan->save();

        $this->createOrUpdate($laporan, $request, $input);

        return redirect()->route('kegiatan.index')
                        ->with('success', 'Data created successfully');
    }

    public function ubahLaporan($id)
    { 
        $laporan = Laporan::with(['proposal','indikatorpos'])->find($id);
        $kegiatanpo = KegiatanPO::with('jurbagnitpus')->where('id',$laporan->proposal->kegiatanpo->id)->first();
        $kelompokanggaran = KelompokAnggaran::all();
        $pegawai = Pegawai::all();
        $pejabat = Pejabat::all();
        $proposal = Proposal::where('id',$laporan->proposal->id)->first();
        $programutama = ProgramUtama::all();
        return view('spi/laporan/laporan', compact('laporan','kegiatanpo','kelompokanggaran','pegawai','pejabat','proposal','programutama'));
    }

    public function updateLaporan(Request $request, $id)
    { 
        $this->validate($request, [
            'foto_laporan' => 'mimes:pdf|max:2048',
            'surat_laporan' => 'mimes:pdf|max:2048',
            'luaran_laporan' => 'mimes:pdf|max:2048',
            'materi_laporan' => 'mimes:pdf|max:2048',
            'berita_laporan' => 'mimes:pdf|max:2048',
        ]);
        
        $foto = $request->input('foto_laporan_hidden');
        if ($request->hasFile('foto_laporan')) 
        {
            $filefoto = $request->file('foto_laporan');
            $filefoto_name = date('YmdHis',time()).'_'.$filefoto->getClientOriginalName();
            $filefoto->move(base_path() . '/public/laporan/file-foto/',$filefoto_name);

            $foto = $filefoto_name;
        }

        $surat = $request->input('surat_laporan_hidden');
        if ($request->hasFile('surat_laporan')) 
        {
            $filesurat = $request->file('surat_laporan');
            $filesurat_name = date('YmdHis',time()).'_'.$filesurat->getClientOriginalName();
            $filesurat->move(base_path() . '/public/laporan/file-surat/',$filesurat_name);

            $surat = $filesurat_name;
        }

        $materi = $request->input('materi_laporan_hidden');
        if ($request->hasFile('materi_laporan')) 
        {
            $filemateri = $request->file('materi_laporan');
            $filemateri_name = date('YmdHis',time()).'_'.$filemateri->getClientOriginalName();
            $filemateri->move(base_path() . '/public/laporan/file-materi/',$filemateri_name);

            $materi = $filemateri_name;
        }

        $luaran = $request->input('luaran_laporan_hidden');
        if ($request->hasFile('luaran_laporan')) 
        {
            $fileluaran = $request->file('luaran_laporan');
            $fileluaran_name = date('YmdHis',time()).'_'.$fileluaran->getClientOriginalName();
            $fileluaran->move(base_path() . '/public/laporan/file-luaran/',$fileluaran_name);

            $luaran = $fileluaran_name;
        }

        $berita = $request->input('berita_laporan_hidden');
        if ($request->hasFile('berita_laporan')) 
        {
            $fileberita = $request->file('berita_laporan');
            $fileberita_name = date('YmdHis',time()).'_'.$fileberita->getClientOriginalName();
            $fileberita->move(base_path() . '/public/laporan/file-berita/',$fileberita_name);

            $berita = $fileberita_name;
        }

        $input = request()->except(['_token','_method','alasan_peserta','foto_laporan','surat_laporan',
        'materi_laporan','berita_laporan','luaran_laporan','foto_laporan_hidden','surat_laporan_hidden',
        'materi_laporan_hidden','berita_laporan_hidden','luaran_laporan_hidden']);

        // 1. Laporan Save
        $laporan = Laporan::find($id);
        $laporan->id_proposal = $laporan->proposal->id;
        $laporan->id_kegiatan = $laporan->proposal->kegiatanpo->id;
        $laporan->fill($input);
        $laporan->foto_laporan = $foto;
        $laporan->surat_laporan = $surat;
        $laporan->materi_laporan = $materi;
        $laporan->luaran_laporan = $luaran;
        $laporan->berita_laporan = $berita;
        $laporan->save();

        $this->createOrUpdate($laporan, $request, $input);
       
        return redirect()->route('kegiatan.index')
                        ->with('success', 'Data created successfully');
    }

    /**
     * @param object $laporan \App\Models\Laporan
     * @param array $request \Request
     * @param array $input \Request
     */
    private function createOrUpdate($laporan, $request, $input)
    {
         // 2. Delete and insert indikator
        Indikatorpo::where('id_laporan', $laporan->id)->delete();
        if ($request->indikator) {
            foreach($request->indikator as $key=>$v) {
                $data=array(
                    'id_laporan'=>$laporan->id,
                    'indikator'=>$request->indikator[$key],
                    'baseline'=>$request->baseline[$key],
                    'target'=>$request->target[$key],
                );
                Indikatorpo::create($data);
            }
        }

        //3. Delete and insert pesertapo
        Pesertapo::where('id_proposal', $laporan->proposal->id)->delete();
        if($request->nama_peserta){
            foreach($request->nama_peserta as $key=>$v)
            {
                $data=array(
                    'id_proposal'=>$laporan->proposal->id,
                    'id_peserta'=>$request->nama_peserta[$key],
                    'nip'=>$request->nip_peserta[$key],
                    'peran'=>$request->peran_peserta[$key],
                    'golongan'=>$request->gol_peserta[$key],
                    'jabatan'=>$request->jab_peserta[$key]
                );
                Pesertapo::create($data);
            }
        }  

        if (in_array(null, $input)) {
        } else { // 7.2 If all is filled, update status become submitted
            $laporan->status = '1';
            $laporan->save();

            //7.3 If there's proposal's review, change status_proposal become 0, and status_anggaran become 0
            if ($review = $laporan->review) {
                $review->status_laporan = '0';
                $review->status = '0';
                $review->save();
            }
        }

    }
    
    public function viewLaporanPdf($idKegiatan)
    {
        $data['laporan'] = $laporan= Laporan::where('id_kegiatan', $idKegiatan)->first();

        $pdf = PDF::loadView('spi/kegiatan/laporan-pdf', $data)
            ->setPaper('a4', 'portrait');
        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );
        return $pdf->stream();
        // return view('spi\kegiatan\laporan-pdf',$data);
    }
    
}
