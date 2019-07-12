@extends('layouts.spi.master')
@section('title', 'Update Renstra')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Renstra</h1>
          <p>Update Renstra</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Renstra</a></li>
        <li class="breadcrumb-item"><a href="#">Update Renstra</a></li>
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

                    <form action="{{ route('renstra.update', $renstra->id_renstra) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Renstra</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="renstra" placeholder="Renstra" value="{{ $renstra->renstra}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Tahun Penetapan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun_penetapan" placeholder="Tahun Penetapan" value="{{ $renstra->tahun_penetapan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Status</label>
                            <div class="col-sm-6">
                                @if($renstra->status == 'N')
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="N" checked>
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Tidak</span>
                                    </label>
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="Y">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Ya</span>
                                    </label>
                                @else
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="N">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Tidak</span>
                                    </label>
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="Y" checked>
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Ya</span>
                                    </label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('renstra.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
                
