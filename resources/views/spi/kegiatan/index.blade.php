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
                                <td>{{$k->id}}</td>
                                <td>{{$k->nama_kegiatan}}</td> 
                                <!-- Proposal -->
                                <td>
                                    @if (empty($k->proposal))
                                        <a href="{{route('proposal.pertama',$k->id)}}" class="btn btn-sm btn-success">
                                            <i class="icon fa fa-plus"></i> Buat
                                        </a>
                                    @endif

                                    @if ($k->proposal)
                                        @if ($k->proposal->status == '0')
                                            <a href="{{ route('proposal.edit', $k->proposal->id) }}" class="btn btn-sm btn-success">
                                                <i class="icon fa fa-plus"></i> Ubah
                                            </a>
                                        @endif

                                        @if ($k->proposal->status == 2)
                                            <a href="{{route('proposal.editproposal')}}" class="btn btn-sm btn-warning">
                                                <i class="icon fa fa-exclamation"></i> Revisi
                                            </a>
                                        @endif
                                    @endif

                                    <a href="{{route('proposal.viewpdf',$k->id)}}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i> PDF</a>
                                </td>
                                <td>
                                    @if (empty($k->proposal))
                                        <span class="badge badge-pill badge-warning">Belum Dibuat</span>
                                    @elseif($k->proposal->status == '0')
                                        <span class="badge badge-pill badge-warning">Belum Submit</span>
                                    @elseif($k->proposal->status == '1')
                                        <span class="badge badge-pill badge-info">Submit</span>
                                    @elseif($k->proposal->status == '2')
                                        <span class="badge badge-pill badge-danger">Revisi</span>
                                    @else
                                        <span class="badge badge-pill badge-success">Disetujui</span>
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
            "info"      : false,
            "searching" : false,
            "autoWidth" : false,
            'LengthChange' : false,
            "responsive": true
        });
    });
</script>

@endpush()