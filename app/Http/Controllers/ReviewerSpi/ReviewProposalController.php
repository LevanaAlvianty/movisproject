<?php

namespace App\Http\Controllers\ReviewerSpi;

use App\Http\Controllers\Controller;
use App\KegiatanPO;
use App\KelAnggaran;
use App\Proposal;
use App\ReviewProposalpo;
use Auth;
use DB;
use Illuminate\Http\Request;


class ReviewProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('pegawai')->user()->isReviewerspi())
        {
            $reviewerspi = Auth::guard('pegawai')->user()->nip;
            $data['kegiatanpos'] = KegiatanPO::with('proposal')
                                ->where('reviewer_spi', $reviewerspi)
                                ->orderBy('tahun','desc')
                                ->orderBy('id','asc')
                                ->get();
        }
        elseif(Auth::guard('pegawai')->user()->isReviewerang())
        {
            $revieweranggaran = Auth::guard('pegawai')->user()->nip;
            $data['kegiatanpos'] = KegiatanPO::with('proposal')
                                ->where('reviewer_ang', $revieweranggaran)
                                ->orderBy('tahun','desc')
                                ->orderBy('id','asc')
                                ->get();
        }
        return view ('reviewerspi/index-reviewproposal',$data);
    }

    public function buatReviewProposal($id)
    {
        $data['proposal'] = Proposal::with('review')->find($id);
        $data['reviewproposalpo'] = new ReviewProposalpo;
        return view ('reviewerspi/tampilan-proposalreview/proposal',$data);
    }

    public function simpanReviewProposal(Request $request, $id)
    {
        $proposal= Proposal::find($id);
        $input = request()->except(['_token','_method','r_panitialuar']);

        // 1. Review Proposal save
        $reviewproposal = new ReviewProposalpo;
        $reviewproposal->id_proposal = $id;
        $reviewproposal->fill($input);
        $reviewproposal->status = '0';
        $reviewproposal->save();

        if (in_array(null, $input)) {
        } else { // 7.2 If all is filled, update status become submitted
            $reviewproposal->status = '1';
            $reviewproposal->save();
        }
        return redirect()->route('reviewproposal.index')
                        ->with('success', 'Data update successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewproposalpo = ReviewProposalpo::find($id);
        $proposal = Proposal::where('id',$reviewproposalpo->proposal->id)->first();
        return view ('reviewerspi/tampilan-proposalreview/proposal',compact('proposal','reviewproposalpo'));
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
        $input = request()->except(['_token','_method','review_panitialuar']);
        
        // 1. Review Proposal save
        $reviewproposal = ReviewProposalpo::find($id);
        $reviewproposal->id_proposal = $reviewproposal->proposal->id;
        $reviewproposal->r_panitialuar = $request->review_panitialuar;
        $reviewproposal->fill($input);
        $reviewproposal->save();
        // dd($reviewproposal);
        if (in_array(null, $input)) {
        } else { // 7.2 If all is filled, update status become submitted
            $reviewproposal->status = '1';
            $reviewproposal->save();
        }

        return redirect()->route('reviewproposal.index')
                        ->with('success', 'Data update successfully');
    }


    /**
     * @param int $id
     */
    public function anggaranApproved($id)
    {
        $reviewProposal = ReviewProposalpo::findOrFail($id);
        $reviewProposal->status_anggaran = '1';
        $reviewProposal->save();

        if ($reviewProposal->status_proposal == '1' && $reviewProposal->status_anggaran == '1') {
            $proposal = $reviewProposal->proposal;
            $proposal->status = '3';
            $proposal->save();
        }
        
        return redirect()->back();
    }

    /**
     * @param int $id
     */
    public function anggaranUnapproved($id)
    {
        $reviewProposal = ReviewProposalpo::findOrFail($id);
        $reviewProposal->status_anggaran = '2';
        $reviewProposal->save();

        $proposal = $reviewProposal->proposal;
        $proposal->status = '2';
        $proposal->save();

        return redirect()->back();
    }

    public function approval(Request $request)
    {
        $reviewProposal = ReviewProposalpo::findOrFail($request->get('id'));
        $reviewProposal->status_proposal = '1';
        $reviewProposal->save();

        if ($reviewProposal->status_proposal == '1' && $reviewProposal->status_anggaran == '1') {
            $proposal = $reviewProposal->proposal;
            $proposal->status = '3';
            $proposal->save();
        }
        
        return redirect()->back();
    }

    /**
     * @param int $id
     */
    public function proposalUnapproved($id)
    {
        $reviewProposal = ReviewProposalpo::findOrFail($id);
        $reviewProposal->status_proposal = '2';
        $reviewProposal->save();

        $proposal = $reviewProposal->proposal;
        $proposal->status = '2';
        $proposal->save();

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
