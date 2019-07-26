@extends('layouts.spi.master')
@section('title', 'Daftar Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Daftar Kegiatan PO</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Kegiatan PO</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered dt-responsive" id="tabelkegiatanspi">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Akun</th>
                                <th class="text-center align-middle">Nama Kegiatan</th> 
                                <th class="text-center align-middle">Unit Pelaksana</th>
                                <th class="text-center align-middle">Reviewer SPI</th> 
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach ($kegiatanpo as $d )
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$d->kode_akun}}</td> 
                                <td>{{$d->nama_kegiatan}}</td>  
                                <td>{{$d->kode}}</td>
                                <td> @foreach ($pegawai as $p)
                                        @if($p->nip == $d->reviewer_spi)
                                            {{ $p->nama }}       
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('kegiatanadminspi.edit', $d->id) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i> Assign</a>
                                    <a href="{{ route('kegiatanadminspi.show', $d->id) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i> Detail</a>
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
        $('#tabelkegiatanspi').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : false,
            "searching" : false,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true
        });
    });
</script>

@endpush()