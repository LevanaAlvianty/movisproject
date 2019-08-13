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
                <!-- Dokumen Luaran -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>E. Luaran</b></h5><br>
                        <p>{!! $proposal->luaran_prop !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Luaran -->

                <!-- Komentar Luaran -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Luaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_luaran" id="r_luaran" cols="30" rows="10" 
                                            class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_luaran }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Luaran -->
            </tr>
        </tbody>
    </table>
</table>

