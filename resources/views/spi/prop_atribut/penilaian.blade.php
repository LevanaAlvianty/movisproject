@extends('layouts.spi.master')
@section('title', 'Penilaian Proposal')
@section('judulapp')
    <div>
          <h1><i class="fa fa-file-text-o"></i> Proposal</h1>
          <p>Hasil Penilaian Proposal</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Proposal</a></li>
        <li class="breadcrumb-item"><a href="#">Penilaian Proposal</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th width="" class="text-center">No</th>
                                <th width="" class="text-center">Komponen</th>
                                <th width="" class="text-center">Penilaian</th>
                                <th width="" class="text-center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td widd="" class="text-center">1</td>
                                <td width="">Sampul Depan</td>
                                <td width="" class="text-center"><input type="checkbox" checked/></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">2</td>
                                <td width="">Halaman Pengesahan</td>
                                <td width="" class="text-center">
                                    <div class="pretty p-icon p-smooth">
                                        <input type="checkbox" />
                                        <div class="state p-success">
                                            <i class="icon fa fa-check"></i>
                                            <label for="">Correct</label>
                                        </div>
                                    </div>                        
                                </td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">3</td>
                                <td width="">Latar Belakang</td>
                                <td width="" class="text-center">
                                    <span class="badge badge-pill badge-success">Approve</span>
                                </td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">4</td>
                                <td width="">Tujuan</td>
                                <td width="" class="text-center">
                                    <div class="pretty p-icon p-smooth">
                                        <input type="checkbox" />
                                        <div class="state p-danger-o">
                                            <i class="icon fa fa-close"></i>
                                            <label for="">Uncorrect</label>
                                        </div>
                                    </div>  
                                </td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">5</td>
                                <td width="">Mekanisme Kegiatan</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">6</td>
                                <td width="">Personil</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">7</td>
                                <td width="">Luaran</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">8</td>
                                <td width="">Jadwal Kegiatan</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">9</td>
                                <td width="">Anggaran</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width=""></td>
                            </tr>
                            <tr>
                                <td width="" class="text-center">10</td>
                                <td width="">Penutup</td>
                                <td width="" class="text-center"><input type="checkbox" /></td>
                                <td width="">gggggggggggggggggggggggggggggggggggggggggggggggg
                                bhgbhvbnvbnvgbvgvhhhhhhhhsdddddddddddddddddddddddd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

