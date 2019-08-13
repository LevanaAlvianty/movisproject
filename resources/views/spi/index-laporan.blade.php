@extends('layouts.spi.master')
@section('title', 'Daftar Laporan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-file-o"></i> Laporan</h1>
          <p>Daftar Laporan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Laporan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered dt-responsive" id="tabellaporan">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Judul</th>
                                    <th class="text-center align-middle">Unit Pelaksana</th> 
                                    <th class="text-center align-middle">Tahun</th> 
                                    <th class="text-center align-middle">PIC</th>
                                    <th class="text-center align-middle">Status Laporan</th> 
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($laporan)
                                @foreach ($laporan as $lap)
                                    <tr>
                                        <td class="text-center align-middle">{{$loop->iteration}}</td>
                                        <td>{{$lap->judul}}</td>
                                        <td class="text-center align-middle">{{$lap->proposal->kodeunit}}</td>  
                                        <td class="text-center align-middle">{{$lap->thn_anggaran}}</td>
                                        <td>{{$lap->nama_pelaksana}}</td>
                                        <td class="text-center align-middle">
                                            @if ($lap->status == '0')
                                                <span class="badge badge-pill badge-warning">Belum Submit</span>
                                            @elseif ($lap->getStatusIsSubmitted())
                                                <span class="badge badge-pill badge-info">Menunggu Review</span>
                                            @elseif ($lap->getStatusRevisi())
                                                <span class="badge badge-pill badge-danger">Revisi</span>
                                            @elseif($lap->getStatusDisetujui())
                                                <span class="badge badge-pill badge-success">Disetujui</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($lap->status == '3')
                                                <a href="{{ route('laporan.viewlaporanpdf', $lap->proposal->kegiatanpo->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-eye"></i> Proposal PDF
                                                </a>
                                            @else
                                                <button class="btn btn-sm btn-warning" disabled><i class="icon fa fa-eye"></i> Laporan PDF</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
        $('#tabellaporan').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":false,
            "language": {
                "lengthMenu": "Menampilkan _MENU_ proposal",
                "zeroRecords": "Tidak Ditemukan - maaf",
                "info":"Menampilkan _START_ sampai _END_ dari _TOTAL_ proposal",
                "infoEmpty":"Menampilkan 0 sampai 0 dari 0 proposal",
                "search":"Cari :",
            }
        });
    });
</script>

@endpush()