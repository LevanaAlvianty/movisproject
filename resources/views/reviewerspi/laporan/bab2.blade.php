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
            <!-- Mekanisme -->
            <tr>
                <!-- Dokumen Mekanisme -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>BAB 2. Pelaksanaan Kegiatan</b></h5><br>
                        <h5 style="text-align:left"><b>2.1 Mekanisme Pelaksanaan Kegiatan</b></h5>
                        <p>{!! $laporan->proposal->mekanisme_prop !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Mekanisme -->

                <!-- Komentar Mekanisme -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar mekanisme Pelaksanaan Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_mekanisme" id="r_mekanisme" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_mekanisme}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Mekanisme -->
            </tr>
            <!-- End Mekanisme -->

            <!-- Pelaksanaan -->
            <tr>
                <!-- Dokumen Pelaksanaan -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>2.2 Pelaksanaan Kegiatan</b></h5>
                        <P>{!! $laporan->pelaksanaan !!}</p>
                    </div>
                </td>
                <!-- End Dokumen Pelaksanaan -->

                <!-- Komentar Pelaksanaan -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Pelaksanaan Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_pelaksanaan" id="r_pelaksanaan" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_pelaksanaan}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Pelaksanaan -->
            </tr>
            <!-- End Pelaksanaan -->

               <!-- Pemanfaatan Sumber Daya -->
               <tr>
                <!-- Dokumen Pemanfaatan Sumber Daya -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>2.3 Pemanfaatan Sumber Daya</b></h5>
                        <p>{!! $laporan->overview_sumberdaya !!}</p>
                                
                        <p class="text-center">Tabel 1. Susunan Panitia</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="35%" class="text-center">Nama</th>
                                        <th width="35%" class="text-center">NIP</th>
                                        <th width="25%" class="text-center">Peran</th>
                                    </tr>
                                </thead>
                                <tbody id="panitia-dalam-laporan" class="panitia-dalam-laporan">
                                    @if($laporan->proposal->panitiadalampos)
                                        @foreach ($laporan->proposal->panitiadalampos as $panitiadalam)
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

                        @php
                            $panitialuarpoCount = 0;
                            if ($laporan->proposal->panitialuarpos) {
                                foreach ($laporan->proposal->panitialuarpos as $panitialuar) {
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

                        @if ($panitialuarpoCount > 0)
                        <p>Adapun susunan panitia dari luar Polines yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30%" class="text-center align-middle">Nama</th>
                                        <th width="25%" class="text-center align-middle">NIP</th>
                                        <th width="15%" class="text-center align-middle">NPWP</th>
                                        <th width="10%" class="text-center align-middle">Curriculum Vitae</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($laporan->proposal->panitialuarpos)
                                        @foreach($laporan->proposal->panitialuarpos as $panitialuar)
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
                        </div>
                        @endif
                         
                        <p>{!! $laporan->peran_panitia !!}</p>
                        
                        <p>{!! $laporan->overview_peserta !!}</p>
                        <p class="text-center">Tabel 2.Daftar Peserta</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30%" class="text-center">Nama</th>
                                        <th width="25%" class="text-center">NIP</th>
                                        <th width="15%" class="text-center">Peran</th>
                                        <th width="10%" class="text-center">Golongan</th>
                                        <th width="15%" class="text-center">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody id="peserta_laporan" class="peserta_laporan">
                                    @if($laporan->proposal->pesertaPos)
                                        @foreach($laporan->proposal->pesertaPos as $peserta)
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
                        </div><br>  

                        @if($laporan->alasan_peserta)
                        <p>{{$laporan->alasan_peserta}}</p>
                        @endif
                        
                        <p class="text-center">Tabel 3. Rincian Biaya</p>
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
                                <tbody class="anggaran_laporan">
                                    @if($laporan->proposal->anggaranpos)
                                        @foreach($laporan->proposal->anggaranpos as $anggaran)
                                            <tr>
                                                <td  width="7%" class="text-center" >{{ $loop->iteration }}</td>
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
                                            <td style="text-align:right;">{{ $laporan->proposal->getAnggaranTotal() }}</td>
                                        </tr>
                                    @endif 
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </td>
                <!-- End Dokumen Pemanfaatan Sumber Daya -->

                <!-- Komentar Pemanfaatan Sumber Daya -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Pemanfaatan Sumber Daya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_sumberdaya" id="r_sumberdaya" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_sumberdaya}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Pemanfaatan Sumber Daya -->
            </tr>
            <!-- End Pemanfaatan Sumber Daya -->
        </tbody>
    </table>
</table>






                    










     
   

