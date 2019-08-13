@extends('layouts.spi.master')
@section('title', 'Daftar Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-file-text-o"></i> Kegiatan</h1>
          <p>Daftar Kegiatan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Kegiatan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered dt-responsive" id="tabelpic">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">No</th>
                                    <th class="text-center align-middle" rowspan="2">Nama Kegiatan</th> 
                                    <th class="text-center align-middle" colspan="2">Proposal</th>
                                    <th class="text-center align-middle" colspan="2">Laporan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">Options</th> 
                                    <th class="text-center align-middle">Status</th> 
                                    <th class="text-center align-middle">Options</th> 
                                    <th class="text-center align-middle">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($kegiatanpos as $k)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$k->nama_kegiatan}}</td> 
                                    <!-- Proposal -->
                                    <td class="text-center">
                                        @if (empty($k->proposal))
                                            <a href="{{route('proposal.pertama',$k->id)}}" class="btn btn-sm btn-success">
                                                <i class="icon fa fa-plus"></i> Buat
                                            </a>
                                        @endif

                                        @if ($proposal = $k->proposal)
                                            @if ($proposal->getStatusIsNotSubmitted())
                                                <a href="{{ route('proposal.edit', $k->proposal->id) }}" class="btn btn-sm btn-info">
                                                    <i class="icon fa fa-edit"></i> Ubah
                                                </a>
                                            
                                            @elseif($proposal->getStatusIsSubmitted())
                                                <button class="btn btn-sm btn-warning" disabled>
                                                    <i class="icon fa fa-eye"></i> PDF
                                                </button>

                                            @elseif ($proposal->getStatusRevisi())
                                                <a href="{{ route('proposal.edit', $k->proposal->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-exclamation"></i> Revisi
                                                </a>

                                            @elseif($proposal->getStatusDisetujui())
                                                <a href="{{route('proposal.viewpdf2',$k->id)}}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-eye"></i> PDF
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if (empty($k->proposal))
                                            <span class="badge badge-pill badge-warning">Belum Dibuat</span>
                                        @endif 
                                        @if ($proposal = $k->proposal)
                                            @if ($proposal->status == '0')
                                                <span class="badge badge-pill badge-warning">Belum Submit</span>
                                            @elseif ($proposal->getStatusIsSubmitted())
                                                <span class="badge badge-pill badge-success">Sudah Disubmit</span>
                                            @elseif ($proposal->getStatusRevisi())
                                                <span class="badge badge-pill badge-danger">Revisi</span>
                                            @elseif($proposal->getStatusDisetujui())
                                                <span class="badge badge-pill badge-success">Disetujui</span>
                                            @endif
                                            <br>
                                            @if (empty($proposal->review))
                                                <span class="badge badge-pill badge-info">Menunggu Review</span>
                                            @elseif ($review = $proposal->review)
                                                
                                            @if ($review->status_proposal == '0')
                                                    <span class="badge badge-pill badge-info">Menunggu Reviewer SPI Review</span>   
                                                @elseif ($review->status_proposal == '1')
                                                    <span class="badge badge-pill badge-success">Reviewer SPI Menyetujui</span>
                                                @elseif ($review->status_proposal == '2')
                                                    <span class="badge badge-pill badge-danger">Reviewer SPI tidak menyetujui</span>
                                                @endif
                                                <br>

                                                @if ($review->status_anggaran == '0')
                                                    <span class="badge badge-pill badge-info">Menunggu Reviewer Anggaran Review</span>   
                                                @elseif ($review->status_anggaran == '1')
                                                    <span class="badge badge-pill badge-success">Reviewer Anggaran Menyetujui</span>
                                                @elseif ($review->status_anggaran == '2')
                                                    <span class="badge badge-pill badge-danger">Reviewer Anggaran tidak menyetujui</span>
                                                @endif
                                                
                                            @endif 
                                        @endif
                                    </td>
                                    <!-- Proposal End -->

                                    <!-- Laporan -->
                                    <td class="text-center">
                                        @if(empty($k->laporan))
                                            <a href="{{route('laporan.buatlaporan',$k->id)}}" class="btn btn-sm btn-success">
                                                <i class="icon fa fa-plus"></i> Buat
                                            </a>
                                        @endif

                                        @if($laporan = $k->laporan)
                                            @if ($laporan->getStatusIsNotSubmitted())
                                                <a href="{{route('laporan.ubahLaporan',$laporan->id)}}" class="btn btn-sm btn-info">
                                                    <i class="icon fa fa-edit"></i> Ubah
                                                </a>
                                            
                                            @elseif($laporan->getStatusIsSubmitted())
                                                <button class="btn btn-sm btn-warning" disabled>
                                                    <i class="icon fa fa-eye"></i> PDF
                                                </button>

                                            @elseif ($laporan->getStatusRevisi())
                                                <a href="{{route('laporan.ubahLaporan',$laporan->id)}}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-exclamation"></i> Revisi
                                                </a>

                                            @elseif($laporan->getStatusDisetujui())
                                                <a href="{{route('laporan.viewlaporanpdf',$k->id)}}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-eye"></i> PDF
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if (empty($k->laporan))
                                            <span class="badge badge-pill badge-warning">Belum Dibuat</span>
                                        @endif 
                                        @if ($laporan = $k->laporan)
                                            @if ($laporan->status == '0')
                                                <span class="badge badge-pill badge-warning">Belum Submit</span>
                                            @elseif ($laporan->getStatusIsSubmitted())
                                                <span class="badge badge-pill badge-success">Sudah Disubmit</span>
                                            @elseif ($laporan->getStatusRevisi())
                                                <span class="badge badge-pill badge-danger">Revisi</span>
                                            @elseif($laporan->getStatusDisetujui())
                                                <span class="badge badge-pill badge-success">Disetujui</span>
                                            @endif
                                            <br>

                                            @if (empty($laporan->review))
                                                <span class="badge badge-pill badge-info">Menunggu Review</span>
                                            
                                            @elseif ($reviewlaporan = $laporan->review)
                                                @if ($reviewlaporan->status_laporan == '0')
                                                    <span class="badge badge-pill badge-info">Menunggu Reviewer SPI Review</span>   
                                                @elseif ($reviewlaporan->status_laporan == '1')
                                                    <span class="badge badge-pill badge-success">Reviewer SPI Menyetujui</span>
                                                @elseif ($reviewlaporan->status_laporan == '2')
                                                    <span class="badge badge-pill badge-danger">Reviewer SPI tidak menyetujui</span>
                                                @endif
                                                <br>
                                            @endif 
                                        @endif
                                
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabelpic').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            'LengthChange' : false,
            "responsive": false,
            "language": {
                "lengthMenu": "Menampilkan _MENU_ kegiatan",
                "zeroRecords": "Tidak Ditemukan - maaf",
                "info":"Menampilkan _START_ sampai _END_ dari _TOTAL_ kegiatan",
                "infoEmpty":"Menampilkan 0 sampai 0 dari 0 kegiatan",
                "search":"Cari :",
            }
        });
    });
</script>

@endpush()