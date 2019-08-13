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
                <!-- Dokumen Mekanisme -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>C. Mekanisme Kegiatan</b></h5><br>
                        <p>{!! $proposal->mekanisme_prop !!}<p>
                    </div>
                </td>
                <!-- End Dokumen Mekanisme -->

                <!-- Komentar Mekanisme -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Mekanisme Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_mekanisme" id="r_mekanisme" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_mekanisme }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Mekanisme -->
            </tr>
        </tbody>
    </table>
</table>