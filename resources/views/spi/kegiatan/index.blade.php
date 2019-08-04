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
                                            <a href="{{ route('proposal.edit', $k->proposal->id) }}" class="btn btn-sm btn-success">
                                                <i class="icon fa fa-plus"></i> Ubah
                                            </a>
                                          
                                        @elseif ($proposal->getStatusRevisi())
                                            <a href="{{ route('proposal.edit', $k->proposal->id) }}" class="btn btn-sm btn-warning">
                                                <i class="icon fa fa-exclamation"></i> Revisi
                                            </a>

                                        @elseif($proposal->getStatusDisetujui())
                                            <a href="{{route('proposal.viewpdf',$k->id)}}" class="btn btn-sm btn-warning">
                                                <i class="icon fa fa-eye"></i> PDF
                                            </a>
                                        @endif
                                    @endif
                                </td>
                                <td>
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
                                        @endif

                                        @if (empty($proposal->review))
                                            <span class="badge badge-pill badge-info">Menunggu Review</span>
                                        @elseif ($review = $proposal->review)
                                            
                                        @if ($review->status_proposal == '0')
                                                <span class="badge badge-pill badge-info">Menunggu Proposal Review</span>   
                                            @elseif ($review->status_proposal == '1')
                                                <span class="badge badge-pill badge-success">Proposal Disetujui</span>
                                            @elseif ($review->status_proposal == '2')
                                                <span class="badge badge-pill badge-danger">Proposal tidak disetujui</span>
                                            @endif

                                            @if ($review->status_anggaran == '0')
                                                <span class="badge badge-pill badge-info">Menunggu Anggaran Review</span>   
                                            @elseif ($review->status_anggaran == '1')
                                                <span class="badge badge-pill badge-success">Anggaran Disetujui</span>
                                            @elseif ($review->status_anggaran == '2')
                                                <span class="badge badge-pill badge-danger">Anggaran tidak disetujui</span>
                                            @endif
                                            
                                        @endif 
                                    @endif
                             
                                </td>
                                <td>
                                    <a href="{{route('laporan.buatlaporan',$k->id)}}" class="btn btn-sm btn-success"><i class="icon fa fa-plus"></i> Buat</a>
                                    <a href="" class="btn btn-sm btn-warning"><i class="icon fa fa-exclamation"></i> Revisi</a>
                                    <a href="{{route('proposal.viewlaporanpdf',$k->id)}}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i> </a>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-danger">Revisi</span>
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
            "responsive": true,
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