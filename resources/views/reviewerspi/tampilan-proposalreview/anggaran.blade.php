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
                <!-- Dokumen Anggaran -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>G. Anggaran</b></h5><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" >No.</th>
                                        <th class="text-center" >Uraian</th>
                                        <th class="text-center" >Volume</th>
                                        <th class="text-center" colspan="2">Biaya Satuan</th>
                                        <th class="text-center" colspan="2">Biaya Satuan</th>
                                    </tr>
                                </thead>
                                <tbody class="anggaran">
                                    @if($proposal->anggaranpos)
                                        @foreach($proposal->anggaranpos as $anggaran)
                                            <tr>
                                                <td  width="7%" class="text-center" >{{ $loop->iteration}}</td>
                                                <td  width="34%">{{$anggaran->standartbiaya->namabarang}}</td>
                                                <td  width="25%" class="text-center">
                                                    {{$anggaran->jml1}} 
                                                    {{$anggaran->standartbiaya->satuan->satuan}} x 
                                                    {{$anggaran->jml2}} x 
                                                    {{$anggaran->jml3}}
                                                </td>
                                                <td class="text-center" width="5%" >Rp</td>
                                                <td width="12%"class="text-right">{{$anggaran->harga}}</td>
                                                <td class="text-center" width="5%" >Rp</td>
                                                <td width="12%" class="text-right" >{{$anggaran->total}}</td> 
                                            </tr>  
                                        @endforeach
                                            <tr>
                                                <td colspan="5"></td>
                                                <td style="text-align:center;">Rp</td>
                                                <td style="text-align:right;">{{ $proposal->getAnggaranTotal() }}</td>
                                            </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Anggaran -->

                <!-- Komentar Anggaran -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Anggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_anggaran" id="r_anggaran" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_anggaran }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Anggaran -->
            </tr>
        </tbody>
    </table>
</table>


