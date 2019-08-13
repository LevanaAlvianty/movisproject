@push('css')
<style>

    .textarea-none-resize{
        width: 200px;
        height: 210px;
        resize: none;
    }
</style>
@endpush()

<table class="responsive">
    <table class="table">
        <tbody>
            <tr>
                <!-- Dokumen Pengesahan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>Halaman Pengesahan</b></h5><br>
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <label for="" class="">1. Judul</label>
                            </div>
                            <div class="col-sm-8">
                                <label>: {{$laporan->judul}}</label>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <label for="" class="">2. Acuan</label>
                            </div>
                            <div class="col-sm-8">
                                <label>: {{$laporan->proposal->dirprogutama->dirprogutama}}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="" style="align:left">3. Pembiayaan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Paguyang diajukan</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->pagu}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. MAK</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->mak}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">c. Anggaran</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->kegiatanpo->sumber}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">4. Ketua Pelaksana Kegiatan</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Nama</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->nama_pelaksana}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Jenis Kelamin</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>: {{$laporan->proposal->jk}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">c. NIP</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->nip_pelaksana}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">d. Jabatan Struktural</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->jab_struktural}}</label>
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">e. Jabatan Fungsional</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->jab_fungsional}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">f. Unit Pelaksana</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->kegiatanpo->jurbagnitpus->kode}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">5. Pelaksanaan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Bulan/Minggu</label>
                                </div>
                                
                                <div class="form-inline col-sm-8">
                                    <label>: {{ Carbon\Carbon::parse($laporan->proposal->tglmulai)->formatLocalized('%B')}}</label> &nbsp; s.d &nbsp;
                                    <label>{{ Carbon\Carbon::parse($laporan->proposal->tglselesai)->formatLocalized('%B %Y')}} </label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Tempat</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->tempat}}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">6. Target yang diharapkan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Luaran</label>
                                </div>
                                <div class="col-sm-8">
                                    <label>: {{$laporan->proposal->target_luaran}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Dampak yang timbul</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <label>: {{$laporan->proposal->dampak}}</label>
                                </div>
                            </div>
                        </div><br>

                        <div class="row justify-content-end">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" >Semarang, {{ Carbon\Carbon::parse($laporan->tgltulis)->formatLocalized('%d %B %Y')}}</label>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Menyetujui, </label><br>
                                <label>{{ $laporan->proposal->jab_unitpelaksana }}</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Ketua Pelaksana, </label>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label>{{$laporan->proposal->nama_unitpelaksana}}</label><br>
                                <label>NIP.{{$laporan->proposal->nip_unitpelaksana}}</label>
                            </div>
                            <div class="col-sm-5">
                                <label>{{$laporan->nama_pelaksana}}</label><br>
                                <label>NIP.{{$laporan->nip_pelaksana}}</label>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Menyetujui, </label><br>
                                <label>{{ $laporan->proposal->jab_wadir1 }}</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Mengetahui, </label><br>
                                <label>{{ $laporan->proposal->jab_wadir2 }}</label>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label>{{$laporan->proposal->nama_wadir1}}</label>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP.{{$laporan->proposal->nip_wadir1}}</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <label>{{$laporan->proposal->nama_wadir2}}</label>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP.{{$laporan->proposal->nip_wadir2}}</label>
                                </div>
                            </div>  
                        </div><br><br>

                        <div class="justify-content-center">
                            <div class="col-sm-4 mx-auto">
                                <label class="text-center">Mengetahui, </label><br>
                                <label class="text-center">Direktur</label>
                            </div>
                        </div><br><br>

                        <div class="justify-content-center">
                            <div class="col-sm-5 mx-auto">
                                <label class="text-center">{{$laporan->proposal->nama_direktur}}</label>
                                <div class="form-inline">
                                    <label class="text-center">NIP.{{$laporan->proposal->nip_direktur}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Pengesahan -->

                <!-- Komentar Pengesahan -->
                <td width="55%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Komentar Pengesahan</th>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_pengesahan" id="r_pengesahan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_pengesahan}}
                                    </textarea>
                                </td>
                            </tr>
                    </table>
                </td>
                <!-- End Komentar Pengesahan -->
            </tr>
        </tbody>
    </table>
</table>













 
