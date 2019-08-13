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
                        <h5 style="text-align:center"><b>DAFTAR LAMPIRAN</b></h5><br>
                        <div class="row justify-content-between">
                            <div class="col-sm-12">
                                <div>
                                    @if($laporan->foto_laporan)
                                    <div class="row justify-content-end">
                                        <div class="col-sm-11">
                                            <label>Lampiran 1 : Foto-foto Pelaksanaan Kegiatan</label><br>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm mr-sm-2" disabled>
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($laporan->surat_laporan)
                                    <div class="row justify-content-end">
                                        <div class="col-sm-11">
                                            <label>Lampiran 2 : Surat Keputusan Panitia Pelaksana Kegiatan</label><br>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm mr-sm-2" disabled>
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($laporan->materi_laporan)
                                    <div class="row justify-content-end">
                                        <div class="col-sm-11">
                                            <label>Lampiran 3 : Materi Kegiatan</label><br>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm mr-sm-2" disabled>
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($laporan->luaran_laporan)
                                    <div class="row justify-content-end">
                                        <div class="col-sm-11">
                                            <label>Lampiran 4 : Luaran Kegiatan</label><br>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm mr-sm-2" disabled>
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($laporan->berita_laporan)
                                    <div class="row justify-content-end">
                                        <div class="col-sm-11">
                                            <label>Lampiran 5 : Berita acara</label><br>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-sm mr-sm-2" disabled>
                                        </div>
                                    </div><br>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Daftar Lampiran -->

                <!-- Komentar Daftar Lampiran -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Daftar Lampiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_daftarlampiran" id="r_daftarlampiran" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_daftarlampiran}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Daftar Lampiran -->
            </tr>
        </tbody>
    </table>
</table>










                        
                       