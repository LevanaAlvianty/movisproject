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
            <!-- latar belakang 1 -->
            <tr>
                <!-- Dokumen Latar Belakang1-->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>BAB 1. Pendahuluan</b></h5><br>
                        <h5 style="text-align:left"><b>1.1 Latar Belakang</b></h5>
                            <p>{!! $laporan->proposal->latarbelakang1 !!}</p>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Latar Belakang1-->

                <!-- Komentar Latar Belakang1-->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Latar Belakang Paragraf 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar1" id="r_latar1" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_latar1}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Latar Belakang1-->
            </tr>
            <!-- end latar belakang 1 -->

            <!-- latar belakang 2 -->
            <tr>
                <!-- Dokumen Latar Belakang 2-->
                <td width="65%">
                    <div class="tile">
                        <p>{!! $laporan->proposal->latarbelakang2 !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Latar Belakang2-->

                <!-- Komentar Latar Belakang 2-->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Latar Belakang Paragraf 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar2" id="r_latar2" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_latar2}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Latar Belakang 2-->
            </tr>
            <!-- end latar belakang 2 -->

            <!-- latar belakang 3 -->
            <tr>
                <!-- Dokumen Latar Belakang 3-->
                <td width="65%">
                    <div class="tile">
                        <p>{!! $laporan->proposal->latarbelakang3 !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Latar Belakang3-->

                <!-- Komentar Latar Belakang 3-->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Latar Belakang Paragraf 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar3" id="r_latar3" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_latar3}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Latar Belakang 3-->
            </tr>
             <!-- end latar belakang 3 -->


            <!-- Maksud Tujuan -->
            <tr>
                <!-- Dokumen maksud tujuan-->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>1.2 Maksud dan Tujuan</b></h5><br>
                        <p>{!! $laporan->proposal->tujuan_prop !!}</p>
                    </div>
                </td>
                <!-- End Dokumen maksud tujuan-->

                <!-- Komentar maksud tujuan-->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Maksud dan Tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_maksudtujuan" id="r_maksudtujuan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_maksudtujuan}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar maksud tujuan-->
            </tr>
             <!-- end maksud tujuan -->
        </tbody>
    </table>
</table>
