@extends('layouts.spi.master')
@section('title', 'Daftar Proposal')

@section('judulapp')
    <div>
          <h1><i class="fa fa-file-text-o"></i> Proposal</h1>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Judul</th>
                                <th class="text-center align-middle">Ketua Pelaksana</th>
                                <th class="text-center align-middle">Tanggal Masuk</th>
                                <th class="text-center align-middle">Status</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kuliah Tamu Program Studi Teknik Informatika</td>
                                <td>Levana Alvianty</td>
                                <td>19-06-2019</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Approve</span>
                                </td>
                                <td>
                                    <a href="{{route('proposal.editproposal')}}" class="btn btn-sm btn-info"><i class="icon fa fa-edit fa-lg"></i></a>
                                    <a href="{{route('proposal.penilaian')}}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye fa-lg"></i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="icon fa fa-download fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kuliah Tamu Program Studi Teknik Informatika</td>
                                <td>Levana Alvianty</td>
                                <td>19-06-2019</td>
                                <td>
                                    <span class="badge badge-pill badge-danger">Revisi</span>
                                </td>
                                <td>
                                    <a href="{{route('proposal.editproposal')}}" class="btn btn-sm btn-info"><i class="fa fa-edit fa-lg"></i></a>
                                    <a href="{{route('proposal.penilaian')}}" class="btn btn-sm btn-warning"><i class="fa fa-eye fa-lg"></i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="icon fa fa-download fa-lg"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection