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
            <!-- Luaran Kegiatan -->
            <tr>
                <!-- Dokumen Luaran Kegiatan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>BAB 3. Luaran Yang Dicapai</b></h5><br>
                        <h5 style="text-align:left"><b>3.1 Luaran Kegiatan (Output)</b></h5>
                        <p>{!! $laporan->luaran_kegiatan !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Luaran Kegiatan -->

                <!-- Komentar Luaran Kegiatan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Luaran Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_luaran" id="r_luaran" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_luaran}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Luaran Kegiatan -->
            </tr>
            <!-- End Luaran Kegiatan -->

            <!-- Indikator Kegiatan -->
            <tr>
                <!-- Dokumen Indikator Kegiatan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>3.2 Indikator Kerja</b></h5>
                        <p>{!! $laporan->overview_indikator !!}</p><br>
                        
                        <p class="text-center">Tabel 5. Indikator Kinerja</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="40%" class="text-center">Indikator</th>
                                        <th width="30%" class="text-center">Base Line</th>
                                        <th width="30%" class="text-center">Target</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="indikator" class="indikator">
                                @if($laporan->indikatorpos)
                                    @foreach($laporan->indikatorpos as $indikator)
                                        <tr>
                                            <td width="40%">{{$indikator->indikator}}</td>
                                            <td width="30%" class="text-center">{{$indikator->baseline}}</td>
                                            <td width="30%" class="text-center">{{$indikator->target}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div> 

                        <p>{!! $laporan->rincian_indikator1 !!}</p>               
                    </div>
                </td>
                <!-- End Dokumen Indikator Kegiatan -->

                <!-- Komentar Indikator Kegiatan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Indikator Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_indikator" id="r_indikator" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_indikator}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Indikator Kegiatan -->
            </tr>
            <!-- End Indikator Kegiatan -->
        </tbody>
    </table>
</table>






                    










     
   