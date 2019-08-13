<?php

namespace App\Http\Controllers\ReviewerSpi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;
use App\Kegiatanpo;
use App\ReviewLaporanpo;
use Auth;


class ReviewLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewerspi = Auth::guard('pegawai')->user()->nip;
        $data['kegiatanpos'] = KegiatanPO::with(['proposal','laporan'])
                            ->where('reviewer_spi', $reviewerspi)
                            ->orderBy('tahun','desc')
                            ->orderBy('id','asc')
                            ->get();
        return view ('reviewerspi/index-reviewlaporan',$data);
    }

    public function buatReviewLaporan($id)
    {
        $data['laporan'] = Laporan::with('review')->find($id);
        $data['reviewlaporanpo'] = new ReviewLaporanpo;
        return view ('reviewerspi/laporan/laporan',$data);
    }

    public function simpanReviewLaporan(Request $request, $id)
    {
        $laporan= Laporan::find($id);
        $input = request()->except(['_token','_method','r_datapeserta','r_daftarisi','r_daftarlampiran']);

        // 1. Review Laporan save
        $reviewlaporanpo = new ReviewLaporanpo;
        $reviewlaporanpo->id_laporan = $id;
        $reviewlaporanpo->fill($input);
        $reviewlaporanpo->status = '0';
        $reviewlaporanpo->save();
        // dd($reviewlaporanpo);

        if (in_array(null, $input)) {
        } else { // 7.2 If all is filled, update status become submitted
            $reviewlaporanpo->status = '1';
            $reviewlaporanpo->save();
        }
        return redirect()->route('reviewerspi.reviewlaporan.index')
                        ->with('success', 'Data update successfully');
    }

    public function editReviewLaporan($id)
    {
        $reviewlaporanpo = ReviewLaporanpo::find($id);
        $laporan = Laporan::where('id',$reviewlaporanpo->laporan->id)->first();
        return view ('reviewerspi/laporan/laporan',compact('laporan','reviewlaporanpo'));
    }

    public function updateReviewLaporan(Request $request, $id)
    {
        $input = request()->except(['_token','_method','r_datapeserta','r_daftarisi','r_daftarlampiran']);
        // dd($input);
        // 1. Review Laporan save
        $reviewlaporanpo = ReviewLaporanpo::find($id);
        $reviewlaporanpo->id_laporan = $reviewlaporanpo->laporan->id;
        $reviewlaporanpo->fill($input);
        $reviewlaporanpo->save();

        if (in_array(null, $input)) {
        } else { // 7.2 If all is filled, update status become submitted
            $reviewlaporanpo->status = '1';
            $reviewlaporanpo->save();
        }

        return redirect()->route('reviewerspi.reviewlaporan.index')
                        ->with('success', 'Data update successfully');
    }

    public function laporanApproved($id)
    {
        $reviewlaporanpo = ReviewLaporanpo::findOrFail($id);
        $reviewlaporanpo->status_laporan = '1';
        $reviewlaporanpo->save();

        if ($reviewlaporanpo->status_laporan == '1') {
            $laporan = $reviewlaporanpo->laporan;
            $laporan->status = '3';
            $laporan->save();
        }
        
        return redirect()->back();
    }

    /**
     * @param int $id
     */
    public function laporanUnapproved($id)
    {
        $reviewlaporanpo = Reviewlaporanpo::findOrFail($id);
        $reviewlaporanpo->status_laporan = '2';
        $reviewlaporanpo->save();

        $laporan = $reviewlaporanpo->laporan;
        $laporan->status = '2';
        $laporan->save();

        return redirect()->back();
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
}
