<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\KegiatanPO;
use App\Proposal;
use Datetime;
Use DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $kegiatan_kesel = DB::table('kegiatanpo')->select('id')->count();
        //laporan
        $laporan_kesel = DB::table('laporan')->select('id')->count();
        $laporan_belumsubmit= DB::table('laporan')
                ->select('id')
                ->where('status','0')
                ->count();
        $laporan_submit= DB::table('laporan')
                ->select('id')
                ->where('status','1')
                ->count();
        $laporan_revisi= DB::table('laporan')
                ->select('id')
                ->where('status','2')
                ->count();
        $laporan_disetujui = DB::table('laporan')
                ->select('id')
                ->where('status','3')
                ->count(); 

        //proposal
        $prop_disetujui = DB::table('proposal')
                        ->select('id')
                        ->where('status','3')
                        ->count();
        $prop_kesel = DB::table('proposal')->select('id')->count();
        $prop_belumsubmit= DB::table('proposal')
                    ->select('id')
                    ->where('status','0')
                    ->count();
        $prop_submit= DB::table('proposal')
                    ->select('id')
                    ->where('status','1')
                    ->count();
        $prop_revisi= DB::table('proposal')
                    ->select('id')
                    ->where('status','2')
                    ->count();
        return view('pegawai-home',compact('kegiatan_kesel','laporan_kesel','laporan_disetujui','laporan_submit','laporan_belumsubmit',
                    'laporan_revisi','prop_kesel','prop_disetujui','prop_submit','prop_belumsubmit','prop_revisi'));
    }

    public function getAllYears()
    {
        $year_array = array();
        $proposals_years = DB::table('proposal')
                    ->select('created_at')
                    ->orderBy( 'created_at','asc' )
                    ->get();
        $proposals_years = json_decode($proposals_years);
        if (! empty($proposals_years)){
            foreach ($proposals_years as $unformattedyear)
            {
                $date = new DateTime( $unformattedyear->created_at);
                $year= $date->format('Y');
                $year_array[$year]=$year;
            } 
        }
        return $year_array;
    }

    public function getYearlyProposalCount($tahun)
    {
        $yearly_proposal_count = DB::table('proposal')
                                ->select('created_at')
                                ->whereYear( 'created_at', $tahun )
                                ->count();
        return $yearly_proposal_count;
    }

    public function getYearlyProposalAcceptedCount($tahun)
    {
        $proposal_disetujui_count = DB::table('proposal')
                                ->select('created_at','status')
                                ->where( 'status', '3' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $proposal_disetujui_count;
    }

    public function getYearlyProposalRevisiCount($tahun)
    {
        $proposal_revisi_count = DB::table('proposal')
                                ->select('created_at','status')
                                ->where( 'status', '2' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $proposal_revisi_count;
    }

    public function getYearlyProposalSubmittedCount($tahun)
    {
        $proposal_submit_count = DB::table('proposal')
                                ->select('created_at','status')
                                ->where( 'status', '1' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $proposal_submit_count;
    }

    public function getYearlyProposalIsNotSubmittedCount($tahun)
    {
        $proposal_belumsubmit_count = DB::table('proposal')
                                ->select('created_at','status')
                                ->where( 'status', '0' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $proposal_belumsubmit_count;
    }

    public function getYearlyProposalData()
    {
        //get all proposal data
        $proposal_disetujui_count_array = array();
        $proposal_revisi_count_array = array();
        $proposal_submit_count_array = array();
        $proposal_belumsubmit_count_array = array();
        $tahun = array();
        $year_array = $this->getAllYears();
        $yearly_post_count_array = array();
        if(!empty( $year_array))
        {
            foreach ( $year_array as $year => $year)
            {
                //proposal keseluruhan
                $yearly_proposal_count = $this->getYearlyProposalCount($year);
                array_push($yearly_post_count_array, $yearly_proposal_count);

                //prposal is not submitted
                $proposal_belumsubmit_count = $this->getYearlyProposalIsNotSubmittedCount($year);
                array_push($proposal_belumsubmit_count_array, $proposal_belumsubmit_count);

                //prposal is waiting review or has submitted
                $proposal_submit_count = $this->getYearlyProposalSubmittedCount($year);
                array_push($proposal_submit_count_array, $proposal_submit_count);

                //proposal disetujui
                $proposal_disetujui_count = $this->getYearlyProposalAcceptedCount($year);
                array_push($proposal_disetujui_count_array, $proposal_disetujui_count);

                //proposal revisi
                $proposal_revisi_count = $this->getYearlyProposalRevisiCount($year);
                array_push($proposal_revisi_count_array, $proposal_revisi_count);

                //data tahun
                array_push($tahun,  $year);
            }
        }
        
        //defining data that want to passed
        $max_data = max($yearly_post_count_array);
        $max = round(( $max_data + 10/2) / 10 ) * 10;
        $yearly_post_data_array = array(
            'years' =>  $tahun,
            'proposal_count_data' => $yearly_post_count_array,
            'proposal_disetujui_count_data' => $proposal_disetujui_count_array,
            'proposal_revisi_count_data' => $proposal_revisi_count_array,
            'proposal_submit_count_data' => $proposal_submit_count_array,
            'proposal_belumsubmit_count_data' => $proposal_belumsubmit_count_array,
            'max' => $max,
        );
        return $yearly_post_data_array;
    }

    //Laporan
    public function getYearlyLaporanCount($tahun)
    {
        $yearly_laporan_count = DB::table('laporan')
                                ->select('created_at')
                                ->whereYear( 'created_at', $tahun )
                                ->count();
        return $yearly_laporan_count;
    }

    public function getYearlyLaporanAcceptedCount($tahun)
    {
        $laporan_disetujui_count = DB::table('laporan')
                                ->select('created_at','status')
                                ->where( 'status', '3' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $laporan_disetujui_count;
    }

    public function getYearlyLaporanRevisiCount($tahun)
    {
        $laporan_revisi_count = DB::table('laporan')
                                ->select('created_at','status')
                                ->where( 'status', '2' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $laporan_revisi_count;
    }

    public function getYearlyLaporanSubmittedCount($tahun)
    {
        $laporan_submit_count = DB::table('laporan')
                                ->select('created_at','status')
                                ->where( 'status', '1' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $laporan_submit_count;
    }

    public function getYearlyLaporanIsNotSubmittedCount($tahun)
    {
        $laporan_belumsubmit_count = DB::table('laporan')
                                ->select('created_at','status')
                                ->where( 'status', '0' ) 
                                ->whereYear('created_at', $tahun)
                                ->count('status');
        return $laporan_belumsubmit_count;
    }

    public function getYearlyLaporanData()
    {
        //get all proposal data
        $laporan_disetujui_count_array = array();
        $laporan_revisi_count_array = array();
        $laporan_submit_count_array = array();
        $laporan_belumsubmit_count_array = array();
        $tahun = array();
        $year_array = $this->getAllYears();
        $yearly_post_count_array = array();
        if(!empty( $year_array))
        {
            foreach ( $year_array as $year => $year)
            {
                //Laporan keseluruhan
                $yearly_laporan_count = $this->getYearlyLaporanCount($year);
                array_push($yearly_post_count_array, $yearly_laporan_count);

                //Laporan is not submitted
                $laporan_belumsubmit_count = $this->getYearlyLaporanIsNotSubmittedCount($year);
                array_push($laporan_belumsubmit_count_array, $laporan_belumsubmit_count);

                //Laporan is waiting review or has submitted
                $laporan_submit_count = $this->getYearlyLaporanSubmittedCount($year);
                array_push($laporan_submit_count_array, $laporan_submit_count);

                //Laporan disetujui
                $laporan_disetujui_count = $this->getYearlyLaporanAcceptedCount($year);
                array_push($laporan_disetujui_count_array, $laporan_disetujui_count);

                //Laporan revisi
                $laporan_revisi_count = $this->getYearlyLaporanRevisiCount($year);
                array_push($laporan_revisi_count_array, $laporan_revisi_count);

                //data tahun
                array_push($tahun,  $year);
            }
        }
        
        //defining data that want to passed
        $max_data = max($yearly_post_count_array);
        $max = round(( $max_data + 10/2) / 10 ) * 10;
        $yearly_post_data_array = array(
            'years' =>  $tahun,
            'laporan_count_data' => $yearly_post_count_array,
            'laporan_disetujui_count_data' => $laporan_disetujui_count_array,
            'laporan_revisi_count_data' => $laporan_revisi_count_array,
            'laporan_submit_count_data' => $laporan_submit_count_array,
            'laporan_belumsubmit_count_data' => $laporan_belumsubmit_count_array,
            'max' => $max,
        );
        return $yearly_post_data_array;
    }
}
