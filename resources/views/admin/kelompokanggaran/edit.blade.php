@extends('layouts.spi.master')
@section('title', 'Update Kelompok Anggaran')

@section('judulapp')
    <div>
          <h1><i class="fa fa-book"></i> Kelompok Anggaran</h1>
          <p>Update Kelompok Anggaran</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kelompok Anggaran</a></li>
        <li class="breadcrumb-item"><a href="#">Update Kelompok Anggaran</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
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
                    <!-- <div class="page-header">
                        <h3 class="line-head"> Edit Data Kelompok Anggaran</h3><br>
                    </div> -->

                    <form action="{{ route('kelang.update', $kelang->id_kelang) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">No</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="id_kelang" placeholder="No" value="{{ $kelang->id_kelang}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Kelompok Anggaran</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="kelompokanggaran" placeholder="Kelompok Anggaran" value="{{ $kelang->kelompokanggaran}}" >
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kelang.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-info">Update</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()

@push('js')
<script>
$('.alert').delay(3000).slideUp(300);
</script>
@endpush()
                
