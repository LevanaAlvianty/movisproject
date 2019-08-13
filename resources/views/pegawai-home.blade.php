@extends('layouts.spi.master')
@section('title', 'Dashboard')

@section('judulapp')
    <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>User Home</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
@endsection
@section('content')
    @php
        $admin = Auth::guard('pegawai')->user()->isAdmin();
        $pic = Auth::guard('pegawai')->user()->isPic();
        $pimpinan = Auth::guard('pegawai')->user()->isPimpinan();
        $reviewerspi = Auth::guard('pegawai')->user()->isReviewerspi();
        $revieweranggaran = Auth::guard('pegawai')->user()->isReviewerang();
        $adminspi = Auth::guard('pegawai')->user()->isAdminspi();
        $adminperencanaan = Auth::guard('pegawai')->user()->isAdminperencanaan();
    @endphp
        <div class="row">
            <div class="col-md-8 col-lg-4">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-tasks fa-3x"></i>
                    <div class="info">
                        <h4>Kegiatan PO</h4>
                        <p><b>{{$kegiatan_kesel}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-4">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>Proposal</h4>
                    <p><b>{{$prop_kesel}}</b></p>
                </div>
            </div>
            </div>
            <div class="col-md-8 col-lg-4">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                    <div class="info">
                        <h4>Laporan</h4>
                        <p><b>{{$laporan_kesel}}</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Detail Proposal</h3>
                    <table class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Proposal Keseluruhan</td>
                                    <td class="text-center">{{$prop_kesel}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Proposal Belum Submit</td>
                                    <td class="text-center">{{$prop_belumsubmit}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Proposal Menunggu Review</td>
                                    <td class="text-center">{{$prop_submit}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Proposal Revisi</td>
                                    <td class="text-center">{{$prop_revisi}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Proposal Disetujui</td>
                                    <td class="text-center">{{$prop_disetujui}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>
                                        <a href="{{ route('proposal.index') }}" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-eye"></i> Data Proposal
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Detail Laporan</h3>
                    <table class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Laporan Keseluruhan</td>
                                    <td class="text-center">{{$laporan_kesel}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Laporan Belum Submit</td>
                                    <td class="text-center">{{$laporan_belumsubmit}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Laporan Menunggu Review</td>
                                    <td class="text-center">{{$laporan_submit}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Laporan Revisi</td>
                                    <td class="text-center">{{$laporan_revisi}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Laporan Disetujui</td>
                                    <td class="text-center">{{$laporan_disetujui}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>
                                        <a href="{{ route('laporan.index') }}" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-eye"></i> Data Laporan
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile" style="position: relative">
                    <h3 class="tile-title"><i class="fa fa-bar-chart"></i> Grafik Progress Proposal</h3>
                    <div class="embed-responsive embed-responsive-16by9" >
                        <canvas class="embed-responsive-item" id="ProposalChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title"><i class="fa fa-area-chart"></i> Grafik Progress Laporan</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="LaporanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    
    @if($admin == 1)
        <!-- <p>admin</p> -->
    @endif

    @if($pic == 1)
        <!-- <p>pic</p> -->
    @endif

    @if($pimpinan == 1)
        <!-- <p>pimpinan</p> -->
    @endif

    @if($reviewerspi == 1)
        <!-- <p>reviewer spi</p> -->
    @endif

    @if($revieweranggaran == 1)
        <!-- <p>reviwer anggaran</p> -->
    @endif

    @if($adminspi == 1)
        <!-- <p>admin spi</p> -->
    @endif

    @if($adminperencanaan == 1)
        <!-- <p>admin perencanaan</p> -->
    @endif
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<!-- Proposal -->
<script type="text/javascript" >
( function ($){

    var charts = {
        init: function(){
            this.ajaxGetProposalYearlyData();
        },
        
        //Ajax Request 
        ajaxGetProposalYearlyData : function(){
            var urlPath = '{!!URL::to('get-proposal-chart-data')!!}'
            var request = $.ajax({
                method: 'GET',
                url: urlPath,
            });
            request.done (function (response){
                charts.createCompleteJobsChart(response);
            })
        },

        createCompleteJobsChart : function(response){
            var proposalCanvas = document.getElementById("ProposalChart");

            Chart.defaults.global.defaultFontFamily = "Times New Roman";
            Chart.defaults.global.defaultFontSize = 16;

            var proposalAllData = {
                label: 'Proposal Keseluruhan',
                data: response.proposal_count_data,
                backgroundColor: 'rgba(0, 0, 255, 0.7)',
                borderWidth: 0,
            };

            var proposalRevisiData = {
                label: 'Proposal Revisi',
                data: response.proposal_revisi_count_data,
                backgroundColor: 'rgba(255, 0, 0, 0.7)',
                borderWidth: 0,
            };

            var proposalDisetujuiData = {
                label: 'Proposal Disetujui',
                data: response.proposal_disetujui_count_data,
                backgroundColor: 'rgba(0, 128, 0, 0.7)',
                borderWidth: 0,
            };

            var proposalSubmitData = {
                label: 'Proposal Menunggu Review',
                data: response.proposal_submit_count_data,
                backgroundColor: 'rgba(52, 235, 213, 0.7)',
                borderWidth: 0,
            };

            var proposalBelumSubmitData = {
                label: 'Proposal Belum Submit',
                data: response.proposal_belumsubmit_count_data,
                backgroundColor: 'rgba(255, 255, 0, 0.7)',
                borderWidth: 0,
            };

            var proposalData = {
                labels: response.years,
                datasets: [proposalAllData, proposalBelumSubmitData, proposalSubmitData, proposalRevisiData, proposalDisetujuiData]
            };

            var chartOptions = {
                scales: {
                    xAxes: [{
                        barPercentage: 1,
                        categoryPercentage: 0.6,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max:response.max,
                            maxTicksLimit:10
                        }
                    }]
                }
            };

            var barChart = new Chart(proposalCanvas, {
                type: 'bar',
                data: proposalData,
                options: chartOptions
            });
        
        }
    };
    charts.init();

})(jQuery);  
</script>
<!-- End Proposal -->

<!-- Laporan -->
<script type="text/javascript" >
( function ($){

    var charts = {
        init: function(){
            this.ajaxGetLaporanYearlyData();
        },
        
        //Ajax Request 
        ajaxGetLaporanYearlyData : function(){
            var urlPath = '{!!URL::to('get-laporan-chart-data')!!}'
            var request = $.ajax({
                method: 'GET',
                url: urlPath,
            });
            request.done (function (response){
                charts.createCompleteJobsChart(response);
            })
        },

        createCompleteJobsChart : function(response){
            var laporanCanvas = document.getElementById("LaporanChart");

            Chart.defaults.global.defaultFontFamily = "Times New Roman";
            Chart.defaults.global.defaultFontSize = 16;

            var laporanAllData = {
                label: 'Laporan Keseluruhan',
                data: response.laporan_count_data,
                backgroundColor: 'rgba(0, 0, 255, 0.7)',
                borderWidth: 0,
            };

            var laporanRevisiData = {
                label: 'Laporan Revisi',
                data: response.laporan_revisi_count_data,
                backgroundColor: 'rgba(255, 0, 0, 0.7)',
                borderWidth: 0,
            };

            var laporanDisetujuiData = {
                label: 'Laporan Disetujui',
                data: response.laporan_disetujui_count_data,
                backgroundColor: 'rgba(0, 128, 0, 0.7)',
                borderWidth: 0,
            };

            var laporanSubmitData = {
                label: 'Laporan Menunggu Review',
                data: response.laporan_submit_count_data,
                backgroundColor: 'rgba(52, 235, 213, 0.7)',
                borderWidth: 0,
            };

            var laporanBelumSubmitData = {
                label: 'Laporan Belum Submit',
                data: response.laporan_belumsubmit_count_data,
                backgroundColor: 'rgba(255, 255, 0, 0.7)',
                borderWidth: 0,
            };

            var laporanData = {
                labels: response.years,
                datasets: [laporanAllData, laporanBelumSubmitData, laporanSubmitData, laporanRevisiData, laporanDisetujuiData]
            };

            var chartOptions = {
                scales: {
                    xAxes: [{
                        barPercentage: 1,
                        categoryPercentage: 0.6,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max:response.max,
                            maxTicksLimit:10
                        }
                    }]
                }
            };

            var barChart = new Chart(laporanCanvas, {
                type: 'bar',
                data: laporanData,
                options: chartOptions
            });
        
        }
    };
    charts.init();

})(jQuery);  
</script>
<!-- End Laporan -->

@endpush()
