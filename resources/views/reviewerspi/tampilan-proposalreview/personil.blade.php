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
                <!-- Dokumen Panitia Dalam -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>D. Personil</b></h5>
                        <p>Adapun susunan panitia yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="35%" class="text-center">Nama</th>
                                        <th width="35%" class="text-center">NIP</th>
                                        <th width="25%" class="text-center">Peran</th>
                                    </tr>
                                </thead>
                                <tbody id="panitia-dalam" class="panitia-dalam">
                                    @if ($proposal->panitiadalampos)
                                        @foreach ($proposal->panitiadalampos as $panitiadalam)
                                            <tr>
                                                <td width="35%">{{$panitiadalam->pegawai->nama}}</td>
                                                <td width="35%" class="text-center">{{$panitiadalam->nip}}</td>
                                                <td width="25%" class="text-center">{{$panitiadalam->peran}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Panitia Dalam -->

                <!-- Komentar Panitia Dalam -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Panitia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_panitiadalam" id="r_panitiadalam" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_panitiadalam }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Panitia Dalam -->
            </tr>

            <tr>
                <!-- Dokumen Panitia Luar -->
                <td width="65%">
                    <div class="tile">
                        @php
                            $panitialuarpoCount = 0;

                            if ($proposal->panitialuarpos) {
                                foreach ($proposal->panitialuarpos as $panitialuar) {
                                        if (
                                            empty($panitialuar->nama) &&
                                            empty($panitialuar->nip) &&
                                            empty($panitialuar->npwp) &&
                                            empty($panitialuar->cv)
                                        ) {
                                            continue;
                                        }

                                        $panitialuarpoCount++;
                                    }
                                }
                        @endphp   
                        
                        <p>Adapun personil dari luar Polines yang terlibat pada kegiatan ini, sebagai berikut :</p>
                        <div class="table-responsive">
                            @if ($panitialuarpoCount > 0)
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th width="30%" class="text-center">Nama</th>
                                            <th width="25%" class="text-center">NIP</th>
                                            <th width="15%" class="text-center">NPWP</th>
                                            <th width="10%" class="text-center">Curriculum Vitae</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($proposal->panitialuarpos)
                                            @foreach($proposal->panitialuarpos as $panitialuar)
                                                <tr>
                                                    <td width="30%">{{$panitialuar->nama}}</td>
                                                    <td width="25%" class="text-center">{{$panitialuar->nip}}</td>
                                                    <td width="15%" class="text-center">{{$panitialuar->npwp}}</td>
                                                    @if($panitialuar->cv)
                                                        <td width="10%" class="text-center">Terlampir</td>
                                                    @else
                                                        <td></td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            @endif
                        </div>
                        <hr>
                    </div>
                </td>
                <!-- End Dokumen Panitia Luar -->

                <!-- Komentar Panitia Luar -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Personil Dari Luar Polines</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <label style="color:red;">* Jika tidak ada data personil dari luar Polines, komentar untuk panitia luar boleh dikosongi</label>
                                <td class="text-center">
                                    <textarea name="review_panitialuar" id="r_panitialuar" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_panitialuar }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Panitia Luar -->
            </tr>

            <tr>
                <!-- Dokumen Peserta -->
                <td width="65%">
                    <div class="tile">
                        <p>Daftar peserta dalam kegiatan ini :</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30%" class="text-center">Nama</th>
                                        <th width="25%" class="text-center">NIP</th>
                                        <th width="15%" class="text-center">Peran</th>
                                        <th width="10%" class="text-center">Golongan</th>
                                        <th width="15%" class="text-center">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody id="peserta" class="peserta">
                                    @if($proposal->pesertaPos)
                                        @foreach($proposal->pesertaPos as $peserta)
                                            <tr>
                                                <td width="30%">{{$peserta->pegawai->nama}} </td>
                                                <td width="25%" class="text-center">{{$peserta->nip}}</td>
                                                <td width="15%" class="text-center">{{$peserta->peran}}</td>
                                                <td width="10%" class="text-center">{{$peserta->golongan}}</td>
                                                <td width="15%" class="text-center">{{$peserta->jabatan}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </td>
                <!-- End Dokumen Peserta -->

                <!-- Komentar Peserta -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_peserta" id="r_peserta" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_peserta }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Peserta -->
            </tr>
        </tbody>
    </table>
</table>


   


