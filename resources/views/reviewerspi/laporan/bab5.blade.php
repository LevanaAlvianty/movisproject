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
            <!-- Kesimpulan -->
            <tr>
                <!-- Dokumen Kesimpulan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>BAB 5. Penutup</b></h5><br>
                        <h5 style="text-align:left"><b>5.1 Kesimpulan</b></h5>
                        <p>{!! $laporan->kesimpulan !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Kesimpulan -->

                <!-- Komentar Kesimpulan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Kesimpulan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_kesimpulan" id="r_kesimpulan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_kesimpulan}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Kesimpulan -->
            </tr>
            <!-- End Kesimpulan -->

            <!-- Rekomendasi -->
            <tr>
                <!-- Dokumen Rekomendasi -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>5.2 Rekomendasi</h5>
                        <p>{!! $laporan->rekomendasi !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Rekomendasi -->

                <!-- Komentar Rekomendasi -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_rekomendasi" id="r_rekomendasi" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_rekomendasi}}
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