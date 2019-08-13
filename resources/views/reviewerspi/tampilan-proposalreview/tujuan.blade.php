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
                <!-- Dokumen Tujuan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>B. Tujuan</b></h5><br>
                        <p>{!! $proposal->tujuan_prop !!}<p>
                    </div>
                </td>
                <!-- End Dokumen Tujuan -->

                <!-- Komentar Tujuan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_tujuan" id="r_tujuan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_tujuan}}
                                </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Tujuan -->
            </tr>
        </tbody>
    </table>
</table>


