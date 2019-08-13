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
            <!-- Permasalahan -->
            <tr>
                <!-- Dokumen Permasalahan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>BAB 4. Permasalahan Yang Dihadapi Dan Pencapaiannya</b></h5><br>
                        <h5 style="text-align:left"><b>4.1 Permasalahan Yang Dihadapi</b></h5>
                        <p>{!! $laporan->permasalahan !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Permasalahan -->

                <!-- Komentar Permasalahan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Permasalahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_permasalahan" id="r_permasalahan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_permasalahan}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Permasalahan -->
            </tr>
            <!-- End Permasalahan -->

            <!-- Rekomendasi -->
            <tr>
                <!-- Dokumen Rekomendasi -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>4.2 Pemecahan Yang Dilakukan</b></h5>
                        <p>{!! $laporan->pemecahan !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Rekomendasi -->

                <!-- Komentar Rekomendasi -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Pemecahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                <textarea name="r_pemecahan" id="r_pemecahan" cols="30" rows="10" 
                                    class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_pemecahan}}
                                </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Rekomendasi -->
            </tr>
            <!-- End Rekomendasi -->
        </tbody>
    </table>
</table>






                    



