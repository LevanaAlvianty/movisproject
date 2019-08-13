@extends('layouts.spi.master')
@section('title', 'Daftar Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Review Laporan</h1>
          <p>Daftar Review Laporan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Review Laporan</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Review Laporan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @php
            $reviewerspi = Auth::guard('pegawai')->user()->isReviewerspi();
        @endphp

            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered dt-responsive" id="tabelkegiatanreviewerspi">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Kode Akun</th> 
                                    <th class="text-center align-middle">Nama Kegiatan</th> 
                                    <th class="text-center align-middle">Tahun</th> 
                                    <th class="text-center align-middle">Unit Pelaksana</th> 
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($kegiatanpos as $kegiatan )
                                <tr>
                                    <td class="text-center align-middle">{{$loop->iteration}}</td>
                                    <td class="align-middle">{{$kegiatan->kode_akun}}</td>  
                                    <td class="align-middle">{{$kegiatan->nama_kegiatan}}</td> 
                                    <td class="text-center align-middle">{{$kegiatan->tahun}}</td>  
                                    <td class="text-center align-middle">{{$kegiatan->jurbagnitpus->kode}}</td>
                                    <td class="text-center">
                                        @if ($laporan = $kegiatan->laporan)
                                            @if($laporan->getStatusIsNotSubmitted())
                                                <form class="btn-group" >
                                                    <button class="btn btn-sm btn-success" disabled>
                                                        <i class="icon fa fa-plus"></i> Review
                                                    </button>
                                                </form><br />

                                            @elseif($laporan->getStatusIsSubmitted() || $laporan->getStatusRevisi() || $laporan->getStatusDisetujui())
                                                @if(empty($laporan->review))
                                                    <form class="btn-group" >
                                                        <a href="{{ route('reviewerspi.reviewlaporan.buatreviewlaporan',$laporan->id)}}" 
                                                            class="btn btn-sm btn-success"><i class="icon fa fa-plus"></i> Review
                                                        </a>
                                                    </form><br />
                                                @endif
                                            
                                                @if($review = $laporan->review)
                                                    @if($review->getStatusReviewIsNotComplete())
                                                        <form class="btn-group" >
                                                            <a href="{{ route('reviewerspi.reviewlaporan.editreviewlaporan',$review->id)}}" class="btn btn-sm btn-info">
                                                                <i class="icon fa fa-edit"></i> Review
                                                            </a>
                                                        </form><br />

                                                    @elseif($review->getStatusReviewIsComplete())
                                                        <form class="btn-group" >
                                                            <button class="btn btn-sm btn-success" disabled>
                                                                <i class="icon fa fa-plus"></i> Review
                                                            </button>
                                                        </form><br />
                                                    @endif

                                                    @if($reviewerspi == 1)   
                                                        @if($review->status_laporan == '0')
                                                            <form class="btn-group" action="{{ route('reviewerspi.reviewlaporan.laporan-approved', ['id' => $review->id]) }}" method="post">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-success btn-sm">
                                                                    <i class="icon fa fa-check"></i> Menyetujui
                                                                </button>
                                                            </form>

                                                            <form class="btn-group" action="{{ route('reviewerspi.reviewlaporan.laporan-unapproved', ['id' => $review->id]) }}" method="post">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="icon fa fa-trash"></i> Tidak Menyetujui
                                                                </button>
                                                            </form>

                                                        @elseif ($review->status_laporan== '1')
                                                            <form class="btn-group" >
                                                                <button type="submit" class="btn btn-success btn-sm" disabled>
                                                                    <i class="icon fa fa-check"></i>Proposal telah disetujui
                                                                </button>
                                                            </form>
                                                                
                                                        @elseif ($review->status_laporan == '2')
                                                            <form class="btn-group" >
                                                                <button type="submit" class="btn btn-danger btn-sm" disabled>
                                                                    <i class="icon fa fa-check"></i>Proposal tidak disetujui
                                                                </button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                    <br>
                                                @endif
                                            @endif
                                        @else
                                            <span class="badge badge-pill badge-info">Belum Submit</span>
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
        $('#tabelkegiatanreviewerspi').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":false,
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