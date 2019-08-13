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
                <!-- Dokumen Penutup -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>H. Penutup</b></h5><br>
                        <p>{!! $proposal->penutup_prop !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Penutup -->

                <!-- Komentar Penutup -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Penutup</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_penutup" id="r_penutup" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_penutup }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Penutup -->
            </tr>
        </tbody>
    </table>
</table>


