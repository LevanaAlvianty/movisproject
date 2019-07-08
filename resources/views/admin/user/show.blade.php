@extends('layouts.spi.master')

@section('content')
<!-- Main content -->
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h3>Detail Data Kegiatan PO {{$kegiatanpo->id}}</h3>
        </div>

        <div class="row ">
            <div class="col-md-12">
               <table class="table table-bordered table-hover">
			        <thead>
                        <tr>
                            <th>No</th>
                            <td>{{ $kegiatanpo->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <td>{{$kegiatanpo->nama_kegiatan}}</td>
                        </tr>
                        <tr>
                            <th>Unit Pelaksana</th>
                            <td>{{$kegiatanpo->id_jurbagnitpus}}</td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>{{$kegiatanpo->nip_pic}}</td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>{{$kegiatanpo->reviewer_spi}}</td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>{{$kegiatanpo->reviewer_ang}}</td>
                        </tr>
			        </thead>
		        </table>
            </div>
        </div>
    </div>
@endsection