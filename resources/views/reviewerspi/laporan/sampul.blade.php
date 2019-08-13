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
                <!-- Dokumen Sampul -->
                <td width="65%">
                    <div class="tile">
                        <div class="row justify-content-end">
                            <div class="">
                                <b><input type="text" style="font-size:14px;font-weight:bold;border:1px solid black;width:80px;height:40px;" class="form-control form-control-sm mr-sm-2 text-center"
                                    value="{{$laporan->proposal->kegiatanpo->jurbagnitpus->kode}}"></b>
                            </div>
                        </div><br><br>
                                                
                        <img src="{{asset('/gambar/logopolines.jpg')}}" alt="logopolines" class="mx-auto d-block" width="20%" height="auto" /><br><br><br>

                        <div><p style="text-align:center"><b>LAPORAN KEGIATAN</b></p></div>

                        <div class="row justify-content-center">
                            <div style="text-transform:uppercase" class="text-center">
                                <label><b>{{$laporan->judul}}</b></label>
                            </div>
                        </div><br><br>

                        <div class="row justify-content-center">
                            <div class="text-center">
                                <label><b>Disusun Oleh :</b></label><br>
                                <label><b>{{$laporan->nama_pelaksana}}</b></label><br>
                                <label><b>NIP.{{$laporan->nip_pelaksana}}</b></label><br>
                            </div>
                        </div><br><br><br><br>

                        <h6 style="text-align:center"><b>Didanai oleh DIPA Polines Tahun {{$laporan->thn_anggaran}}</b></h6>
                                                
                        <div class="row justify-content-center">
                            <div class="text-center">
                                <label><b>MAK. {{$laporan->proposal->mak}}</b></label><br>
                                <label><b>Anggaran : {{$laporan->proposal->kegiatanpo->sumber}}</b></label><br>
                            </div>
                        </div><br><br><br>

                        <h6 style="text-align:center"><b>POLITEKNIK NEGERI SEMARANG</b></h6>
                        <div class="row justify-content-end">
                            <div class="text-center form-inline mx-auto">
                                <label for="formGroupExampleInput" class="mr-sm-3"><b>TAHUN {{$laporan->thn_anggaran}}</b></label>
                            </div>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Sampul -->

                <!-- Komentar Sampul -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Sampul</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_sampul" id="r_sampul" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_sampul}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Sampul -->
            </tr>
        </tbody>
    </table>
</table>
