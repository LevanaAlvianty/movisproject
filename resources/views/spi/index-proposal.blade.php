@extends('layouts.spi.master')
@section('title', 'Daftar Proposal')

@section('judulapp')
    <div>
          <h1><i class="fa fa-file-o"></i> Proposal</h1>
          <p>Daftar Proposal</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Proposal</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Proposal</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered dt-responsive" id="tabelproposal">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Judul</th>
                                    <th class="text-center align-middle">Unit Pelaksana</th> 
                                    <th class="text-center align-middle">Tahun</th> 
                                    <th class="text-center align-middle">PIC</th>
                                    <th class="text-center align-middle">Status Proposal</th> 
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($proposals)
                                @foreach ($proposals as $proposal )
                                    <tr>
                                        <td class="text-center align-middle">{{$loop->iteration}}</td>
                                        <td>{{$proposal->judul}}</td>
                                        <td class="text-center align-middle">{{$proposal->kodeunit}}</td>  
                                        <td class="text-center align-middle">{{$proposal->thn_anggaran}}</td>
                                        <td>{{$proposal->namapelaksana}}</td>
                                        <td class="text-center align-middle">
                                            @if ($proposal->status == '0')
                                                <span class="badge badge-pill badge-warning">Belum Submit</span>
                                            @elseif ($proposal->getStatusIsSubmitted())
                                                <span class="badge badge-pill badge-info">Menunggu Review</span>
                                            @elseif ($proposal->getStatusRevisi())
                                                <span class="badge badge-pill badge-danger">Revisi</span>
                                            @elseif($proposal->getStatusDisetujui())
                                                <span class="badge badge-pill badge-success">Disetujui</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($proposal->status == '3')
                                                <a href="{{ route('proposal.viewpdf', $proposal->kegiatanpo->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="icon fa fa-eye"></i> Proposal PDF
                                                </a>
                                            @else
                                                <button class="btn btn-sm btn-warning" disabled><i class="icon fa fa-eye"></i> Proposal PDF</button>
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
        $('#tabelproposal').DataTable({
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