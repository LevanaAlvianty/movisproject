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
                <!-- Dokumen Paragraf 1 -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>A. Latar Belakang</b></h5><br>

                        <p>{!! $proposal->latarbelakang1 !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Paragraf 1 -->

                <!-- Komentar Paragraf 1 -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Paragraf 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar1" id="r_latar1" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_latar1 }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Paragraf 1 -->
            </tr>

            <tr>
                <!-- Dokumen Paragraf 2 -->
                <td width="65%">
                    <div class="tile">
                        <p>{!! $proposal->latarbelakang2 !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Paragraf 2 -->

                <!-- Komentar Paragraf 2 -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Paragraf 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar2" id="r_latar2" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_latar2 }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Paragraf 2 -->
            </tr>

            <tr>
                <!-- Dokumen Paragraf 3 -->
                <td width="65%">
                    <div class="tile">
                        <p>{!! $proposal->latarbelakang3 !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Paragraf 3 -->

                <!-- Komentar Paragraf 3 -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Paragraf 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_latar3" id="r_latar3" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_latar3 }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Paragraf 3 -->
            </tr>
        </tbody>
    </table>
</table>