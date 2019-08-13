@extends('layouts.spi.master');
@section('title', 'Laporan')
@push('css')
<style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
  
    /*form styles*/
    #msform {
    width: auto;
	margin: 10px auto;
	/* text-align: center; */
	position: relative;
   }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 2px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 20px;
        box-sizing: border-box;
        width: 100%;
	    
        /*stacking fieldsets above each other*/
        position: relative;
        display:table-cell; 
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }
    
    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
        
    }
    #progressbar li {
        list-style-type: none;
        color: black;
        text-transform: uppercase;
        text-align:center;
        font-size: 0.65vw;
        width: 9.09%;
        position: relative;
        float: left;
    }
    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 35px;
        line-height: 35px;
        display: block;
        font-size: 15px;
        text-align:center;
        color: #333;
        background: lightgrey;
        border-radius: 50%;
        margin: 0 auto 5px auto; 
    }
     /*progressbar connectors*/
     #progressbar li:after {
        content: '';
        width: 68%;
        height: 2px;
        background: lightgrey;
        position: absolute;
        left: -34%;
        top: 15px;
        z-index: 1; /*put it behind the numbers*/
    }
    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none; 
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,  #progressbar li.active:after{
        background: #27AE60;
        color: white;
    }

    .textarea-none-resize{
        width: 100px;
        height: 210px;
        resize: none;
    }
</style>
@endpush()

@section('judulapp')
    <div>
        <h1><i class="fa fa-file-text-o"></i> Laporan</h1>
        <p>Tahap Pembuatan Laporan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item"><a href="#">Buat Laporan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                    
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif

            @if($laporan->id)
                @if($laporan->getStatusIsNotSubmitted())
                    <form id="msform" action="{{ route('laporan.updateLaporan', $laporan->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Sampul Depan</li>
                            <li>Halaman Pengesahan</li>
                            <li>Kata Pengantar</li>
                            <li>Daftar isi</li>
                            <li>Daftar Lampiran</li>                   
                            <li>BAB I</li>
                            <li>BAB II</li>
                            <li>BAB III</li>
                            <li>BAB IV</li>
                            <li>BAB V</li>
                            <li>Lampiran</li>
                        </ul>

                        <fieldset>
                            @include('spi.laporan.sampul')<br>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>
                        <fieldset>
                            @include('spi.laporan.pengesahan')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>
                        
                        <fieldset>
                            @include('spi.laporan.katapengantar')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.daftarisi')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.daftarlampiran')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.bab1')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.bab2')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.bab3')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.bab4')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            @include('spi.laporan.bab5')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>
                        <fieldset>
                            @include('spi.laporan.lampiran')<br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        </fieldset><br>

                        <a href="{{route('kegiatan.index')}}" class="btn btn-danger btn-sm" style="float:right;"><i class="fa fa-home fa-lg"></i> Kembali ke Halaman Index</a> 
                        <button type="submit" id="submit" class="btn btn-success btn-sm submit mr-2" style="float:right;" type="button">Submit <i class="fa fa-caret-right fa-lg"></i></button>
                    </form> 
                
                @elseif($laporan->getStatusRevisi())
                    <form id="msform" action="{{ route('laporan.updateLaporan', $laporan->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Sampul Depan</li>
                            <li>Halaman Pengesahan</li>
                            <li>Kata Pengantar</li>
                            <li>Daftar isi</li>
                            <li>Daftar Lampiran</li>                   
                            <li>BAB I</li>
                            <li>BAB II</li>
                            <li>BAB III</li>
                            <li>BAB IV</li>
                            <li>BAB V</li>
                            <li>Lampiran</li>
                        </ul>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.sampul')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Sampul</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_sampul" id="r_sampul" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_sampul}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.pengesahan')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Pengesahan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_pengesahan" id="r_pengesahan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_pengesahan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>
                        
                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.katapengantar')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Kata Pengantar</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_katapengantar" id="r_katapengantar" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_katapengantar}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.daftarisi')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Daftar Isi</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_daftarisi" id="r_daftarisi" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_daftarisi}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.daftarlampiran')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Daftar Lampiran</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_daftarlampiran" id="r_daftarlampiran" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_daftarlampiran}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.bab1')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <br style = "line-height:130px;">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Latar Belakang Paragraf 1</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_latar1" id="r_latar1" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_latar1}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:325px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Latar Belakang Paragraf 2</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_latar2" id="r_latar2" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_latar2}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:295px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Latar Belakang Paragraf 3</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_latar3" id="r_latar3" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_latar3}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:390px;">
                                        
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Maksud dan Tujuan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_maksudtujuan" id="r_maksudtujuan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_maksudtujuan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.bab2')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <br style = "line-height:130px;">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Mekanisme Pelaksanaan Kegiatan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_mekanisme" id="r_mekanisme" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_mekanisme}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:350px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Pelaksanaan Kegiatan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_pelaksanaan" id="r_pelaksanaan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_pelaksanaan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:720px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Pemanfaatan Sumber Daya</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_sumberdaya" id="r_sumberdaya" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_sumberdaya}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.bab3')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <br style = "line-height:130px;">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Luaran Kegiatan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_luaran" id="r_luaran" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_luaran}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:260px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Indikator Kegiatan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_indikator" id="r_indikator" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_indikator}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.bab4')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <br style = "line-height:130px;">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Permasalahan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_permasalahan" id="r_permasalahan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_permasalahan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:360px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Pemecahan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_pemecahan" id="r_pemecahan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_pemecahan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.bab5')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="responsive">
                                        <br style = "line-height:130px;">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Kesimpulan</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_kesimpulan" id="r_kesimpulan" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_kesimpulan}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br style = "line-height:330px;">

                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th class="text-center">Komentar Rekomendasi</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_rekomendasi" id="r_rekomendasi" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_rekomendasi}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                            <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tile">
                                        @include('spi.laporan.lampiran')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <br style = "line-height:160px;">
                                    <table class="responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <th>Komentar Lampiran</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <textarea name="r_lampiran" id="r_lampiran" cols="30" rows="10" 
                                                            class="form-control form-control-sm textarea-none-resize" disabled>{{$laporan->review->r_lampiran}}
                                                        </textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div><br>
                            <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        </fieldset><br>

                        <a href="{{route('kegiatan.index')}}" class="btn btn-danger btn-sm" style="float:right;"><i class="fa fa-home fa-lg"></i> Kembali ke Halaman Index</a> 
                        <button type="submit" id="submit" class="btn btn-success btn-sm submit mr-2" style="float:right;" type="button">Submit <i class="fa fa-caret-right fa-lg"></i></button>
                    </form> 
                @endif
            
            @else
                <form id="msform" action="{{ route('laporan.simpanlaporan',$kegiatanpo->id )}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('POST')}}

                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Sampul Depan</li>
                        <li>Halaman Pengesahan</li>
                        <li>Kata Pengantar</li>
                        <li>Daftar isi</li>
                        <li>Daftar Lampiran</li>                   
                        <li>BAB I</li>
                        <li>BAB II</li>
                        <li>BAB III</li>
                        <li>BAB IV</li>
                        <li>BAB V</li>
                        <li>Lampiran</li>
                    </ul>

                    <fieldset>
                        @include('spi.laporan.sampul')<br>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>
                    <fieldset>
                        @include('spi.laporan.pengesahan')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>
                    
                    <fieldset>
                        @include('spi.laporan.katapengantar')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.daftarisi')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.daftarlampiran')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.bab1')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.bab2')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.bab3')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.bab4')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>

                    <fieldset>
                        @include('spi.laporan.bab5')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                        <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                    </fieldset>
                    <fieldset>
                        @include('spi.laporan.lampiran')<br>
                        <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    </fieldset><br>

                    <a href="{{route('kegiatan.index')}}" class="btn btn-danger btn-sm" style="float:right;"><i class="fa fa-home fa-lg"></i> Kembali ke Halaman Index</a> 
                        <button type="submit" id="submit" class="btn btn-success btn-sm submit mr-2" style="float:right;" type="button">Submit <i class="fa fa-caret-right fa-lg"></i></button>
                </form> 
            @endif
             
        </div>
    </div>
</div>
@endsection()

@push('js')
<script>
//jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    $(function() {
      $(".next").click(function () {
        if (animating) return false;
        animating = true;
      
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
      
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
      
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
          step: function (now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = now * 50 + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
              'transform': 'scale(' + scale + ')',
              'position': 'relative' });
      
            next_fs.css({ 'left': left, 'opacity': opacity });
          },
          duration: 800,
          complete: function () {
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack' });
      
      });
    });

    $(function() {
      $(".previous").click(function () {
        if (animating) return false;
        animating = true;
      
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
      
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
          step: function (now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = (1 - now) * 50 + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity , 'position': 'relative'});
          },
          duration: 800,
          
          complete: function () {
            current_fs.hide();
            animating = false;
          },
          
          //this comes from the custom easing plugin
          easing: 'easeInOutBack' });
         
      });
    });
      
    //scroll bar to top
    $('.next, .previous').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1200);
            return false;
    });
 
</script>

@endpush()

