<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <style>
        @page { 
            margin-left: 3cm;
            margin-right:2cm; 
            margin-top: 2cm;
            margin-bottom: 2cm; 
        }

        body, body p{
            font-family:Arial;
            font-size:11pt;
            line-height:1.5em;
        }
        .default {
            font-family:Arial;
            font-size:11pt;
            line-height:1.5em;
        }
        p{
            text-align:justify;
        }
        .tabelview{
            border: 1px solid black;
        }
        table {
			width: 100%;
		    border-collapse: collapse;
		}
		td,th {
		    text-align: left;
            padding: 1px;
            word-wrap: break-word;
            vertical-align:top;
            font-size:11pt;
            line-height:1.15em;
		    /* border:1px solid; */
        }
        textarea{
            text-align: left;
            word-wrap: break-word;
            vertical-align:top;
            font-size:11pt;
            line-height:1.15em;
            font-family:Arial;
            border:none;
            width:100%;
            height:auto;
            text-align:left;
        }
        .kodeunit{
            border:1px solid #000; 
            float: right;
            width: 120px;
            padding-top: 8px;
            padding-right: 5px;
            padding-bottom: 8px;
            padding-left: 5px;
            text-align: center;
            font-weight: bold;
            font-family:Arial;
            font-size:16pt;
            line-height:1.5em;
        }

        .tulisan{
            text-align: center;
            font-weight: bold;
            font-family:Arial;
            font-size:14pt;
            line-height:1.5em;
        }

        .page-break {
            page-break-after: always;
        }

        .footer .page-number:after { content: counter(page); }
        
   </style>
  </head>
<body>
    
    <!-- Sampul -->
    <div>
        <input type="text" class="kodeunit" value="{{ $proposal->kodeunit }}"><br><br><br>
        <center><img src="gambar/logopolines.jpg" alt="logopolines" width="188px" height="188px"/></center><br><br>
        <div class="tulisan">
            <p class="tulisan" style="font-size:16pt">USUL KEGIATAN</p>
            <p class="tulisan" style="text-transform:uppercase;font-size:16pt;">{{ $proposal->judul }}</p>
        </div><br><br><br>

        <div class="tulisan">
            <label>Disusun Oleh : </label><br>
            <label>{{ $proposal->namapelaksana }}</label><br>
            <label>NIP. {{$proposal->nip_pelaksana}}</label><br>
        </div><br><br><br>

        <div  class="tulisan">
            <label>Didanai oleh DIPA Polines Tahun {{$proposal->thn_anggaran}}</label><br>
        </div> 
        <center><label style="font-size:14pt;line-height:1.5em;"><b>MAK</b>  : {{$proposal->mak}}</label></center>
        <center><label style="font-size:14pt;line-height:1.5em;">Anggaran : {{$proposal->kegiatanpo->sumber}}</label></center><br><br><br>

        <div class="tulisan">
            <label style="font-size:16pt">POLITEKNIK NEGERI SEMARANG</label><br>
            <label style="font-size:16pt">{{$proposal->thn_anggaran}}</label><br>
        </div>
    </div>
    <!-- End Sampul -->

    <!-- Halaman Pengesahan -->
    <div class="page-break">
        <div>
            <p class="tulisan" style="font-size:11pt">HALAMAN PENGESAHAN</p>
        </div>
        <table>
            <tr>
                <td width="3%">1. </td>
                <td width="30%">Judul</td>
                <td width="1%"> : </td>
                <td width="66%" style="text-align:justify;">{{$proposal->judul}}</td>
            </tr>
            <tr>
                <td width="3%">2. </td>
                <td width="30%">Acuan</td>
                <td width="1%"> : </td>
                <td width="66%" style="text-align:justify;">{{$proposal->dirprogutama}}</td>
            </tr>
            <tr>
                <td width="3%">3. </td>
                <td width="30%">Pembiayaan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Pagu yang diajukan</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->pagu}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. MAK</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->mak}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">c. Anggaran</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->kelompokanggaran}}</td>
                </tr>
            <tr>
                <td width="3%">4. </td>
                <td width="30%">Ketua Pelaksanaan Kegiatan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Nama</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->namapelaksana}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Jenis Kelamin</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->jk}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">c. NIP</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->nip_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">d. Jabatan Struktural</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->jab_struktural}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">e. Jabatan Fungsional</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->jab_fungsional}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">f. Unit Pelaksana</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->unit_pelaksana}}</td>
                </tr>
            <tr>
                <td width="3%">5. </td>
                <td width="30%">Pelaksanaan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Bulan</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{ Carbon\Carbon::parse($proposal->tglmulai)->formatLocalized('%B')}} s.d {{ Carbon\Carbon::parse($proposal->tglselesai)->formatLocalized('%B %Y')}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Tempat</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$proposal->tempat}}</td>
                </tr>
            <tr>
                <td width="3%">6. </td>
                <td width="30%">Target yang diharapkan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Luaran</td>
                    <td width="1%"> : </td>
                    <td width="66%" style="text-align:justify;">{{$proposal->target_luaran}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Dampak yang timbul</td>
                    <td width="1%"> : </td>
                    <td width="66%"><textarea>{{$proposal->dampak}}</textarea></td>
                </tr>
        </table>
        <table>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">Semarang, {{ Carbon\Carbon::parse($proposal->tgltulis)->formatLocalized('%d %B %Y')}}</td>
            </tr>
            <tr>
                <td width="33,3%">Menyetujui,</td>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$proposal->jab_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">Ketua Pelaksana</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$proposal->nama_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$proposal->namapelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%">NIP. {{$proposal->nip_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">NIP. {{$proposal->nip_pelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$proposal->jab_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$proposal->jab_wadir2}}</td>
            </tr>
            <tr><td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$proposal->nama_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$proposal->nama_wadir2}}</td>
            </tr>
            <tr>
                <td width="33,3%">NIP. {{$proposal->nip_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">NIP. {{$proposal->nip_wadir2}}</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
            </tr>
            <tr>
                <td width="33%"></td>
                <td width="34%" style="text-align:center;">Direktur</td>
                <td width="33%"></td>
            </tr>
            <tr><td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
            </tr>
            <tr>
                <td width="33%"></td>
                <td width="34%" style="text-align:center;">{{$proposal->nama_direktur}}</td>
                <td width="33%"></td>
            </tr>
            <tr>
                <td width="33%"></td>
                <td width="34%" style="text-align:center;">NIP. {{$proposal->nip_direktur}}</td>
                <td width="33%"></td>
            </tr>
        </table>
       
                           
    </div>
    <!-- End Halaman Pengesahan -->

    <!-- Isi Proposal -->
    <footer>
        <div class="footer fixed-section">
            <div class="left">
                <span class="report-time">08/05/2016 09:43:06</span><br>
                <span class="promo">Generated by QuickEMR.com</span>
            </div>
            <div class="center">
                <span class="signature-warning">Document Electronically Signed</span>
            </div>
            <div class="right">
                <span class="page-number">Page </span>
            </div>
        </div>
    </footer>
    <div>
        <ol type="A">
            <li style="font-weight:bold;">Latar Belakang</li>
                <p>{{$proposal->latarbelakang1}}</p>
                <p>{{$proposal->latarbelakang2}}</p>
                <p>{{$proposal->latarbelakang3}}</p>
        
            <li style="font-weight:bold;">Tujuan</li>
                <p>Tujuan kegiatan {{$proposal->judul}} adalah :</p>
                <textarea style="text-align:justify;">{{$proposal->tujuan_prop}}</textarea><br>
        
            <li style="font-weight:bold;">Mekanisme Kegiatan</li>
                <textarea style="text-align:justify;">{{ strip_tags($proposal->mekanisme_prop) }}</textarea><br>
        
            <li style="font-weight:bold;">Personil</li>
                <table class="tabelview">
                    <thead>
                        <tr>
                            <th class="tabelview" style="text-align:center">No.</th>
                            <th class="tabelview" style="text-align:center; padding:3px">Nama</th>
                            <th class="tabelview" style="text-align:center;">NIP</th>
                            <th class="tabelview" style="text-align:center; padding:3px">Peran</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($proposal->panitiadalampos as $panitiadalampo)
                        <tr>
                            <td class="tabelview" width="7%" style="text-align:center">{{ $loop->index + 1}}</td>
                            <td class="tabelview" width="33%" style="padding:3px">{{$panitiadalampo->pegawai->nama}}</td>
                            <td class="tabelview" width="30%" style="text-align:center">{{$panitiadalampo->nip}}</td>
                            <td class="tabelview" width="20%"style="padding:3px">{{$panitiadalampo->peran}}</td>  
                        </tr>
                    @endforeach
                    <tbody>
                </table><br>
<!-- {{dump($proposal->panitialuarposWhereIsNotEmpty)}} -->
                @if ($proposal->panitialuarposWhereIsNotEmpty->count() > 0)
                    <table class="tabelview">
                        <tbody>
                            @foreach ($proposal->panitialuarposWhereIsNotEmpty as $panitialuarpo)
                                <tr>
                                    <td class="tabelview" width="7%" style="text-align:center">{{ $loop->index + 1 }}</td>
                                    <td class="tabelview" width="30%" style="padding:3px">{{$panitialuarpo->nama}}</td>
                                    <td class="tabelview" width="26%" style="text-align:center">{{$panitialuarpo->nip}}</td>
                                    <td class="tabelview" width="15%" style="padding:3px">{{$panitialuarpo->npwp}}</td>  
                                    @if($panitialuarpo->cv != null)
                                        <td style="text-align:center">Terlampir</td>
                                    @else
                                        <td style="text-align:center"></td>
                                    @endif 
                                </tr>
                           @endforeach
                        <tbody>
                    </table>
                @endif
                
                <p>Adapun Daftar Peserta {{$proposal->judul}} sebagai berikut:</p>
                <table class="tabelview">
                    <tbody>
                        @foreach ($proposal->pesertapos as $pesertapo)
                            <tr>
                                <td class="tabelview" width="7%" style="text-align:center">{{ $loop->iteration }}</td>
                                <td class="tabelview" width="30%" style="padding:3px">{{$pesertapo->nama}}</td>
                                <td class="tabelview" width="26%" style="text-align:center">{{$pesertapo->nip}}</td>
                                <td class="tabelview" width="15%" style="padding:3px">{{$pesertapo->peran}}</td>  
                                <td class="tabelview" width="7%" style="text-align:center">{{$pesertapo->golongan}}</td>
                                <td class="tabelview" width="15%" style="text-align:center">{{$pesertapo->jabatan}}</td>  
                            </tr>
                        @endforeach
                    <tbody>
                </table><br>

            <li style="font-weight:bold;">Luaran (Output)</li>
                <textarea style="text-align:justify;">{{$proposal->luaran_prop}}</textarea><br>

            <li style="font-weight:bold;">Jadwal Kegiatan</li>
                <p>Adapun jadwal kegiatan sebagai berikut : </p>
                <table class="tabelview">
                    <thead class="thead-dark">
                        <tr>
                            <th width="7%" class="tabelview" style="text-align:center;vertical-align:middle;" rowspan="2" >No</th>
                            <th width="33%" class="tabelview" style="text-align:center;vertical-align:middle;padding:3px;" rowspan="2" >Kegiatan</th>
                            <th width="60%" class="tabelview" style="text-align:center;vertical-align:middle;" colspan="12">BULAN</th>
                        </tr>
                        <tr>
                            <th width="5%"  class="tabelview"  style="text-align:center;">1</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">2</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">3</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">4</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">5</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">6</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">7</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">8</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">9</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">10</th> 
                            <th width="5%"  class="tabelview"  style="text-align:center;">11</th>
                            <th width="5%"  class="tabelview"  style="text-align:center;">12</th>
                        </tr>
                    </thead>
                    <tbody class="tabelview">
                        @foreach ($proposal->jadwalpos as $jadwal)
                        <tr>
                            <td class="tabelview" style="text-align:center;" width="7%">{{ $loop->iteration }}</td>
                            <td class="tabelview" width="33%" style="padding:3px;">{{$jadwal->kegiatan}}</td>
                            @if($jadwal->stat_jan == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_feb == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_mar == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_april == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_mei == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_jun == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_jul == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_agust == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_sept == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_okt == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_nov == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif

                            @if($jadwal->stat_des == 1)
                                <td  class="tabelview" width="5%" style="background-color:black;"></td>
                            @else
                                <td  class="tabelview" width="5%" style="background-color:white;"></td>
                            @endif
                        @endforeach
                        </tr>
                    </tbody>
                </table><br>

            <li style="font-weight:bold;">Anggaran</li>
                <p>Rincian biaya kegiatan ini adalah sebagai berikut : </p>
                <table class="tabelview">
                    <thead>
                        <tr>
                            <th class="tabelview" style="text-align:center">No.</th>
                            <th class="tabelview" style="text-align:center; padding:3px;">Uraian</th>
                            <th class="tabelview" style="text-align:center">Volume</th>
                            <th class="tabelview" style="text-align:center" colspan="2">Biaya Satuan</th>
                            <th class="tabelview" style="text-align:center" colspan="2">Biaya Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($proposal->anggaranpos as $anggaran)
                        <tr>
                            <td class="tabelview" style="text-align:center" width="7%">{{ $loop->iteration}}</td>
                            <td class="tabelview" width="34%" style="padding:3px;">{{$anggaran->standartbiaya->namabarang}}</td>
                            <td class="tabelview" style="text-align:center" width="25%">
                                {{$anggaran->jml1}} 
                                {{$anggaran->standartbiaya->satuan->satuan}} x 
                                {{$anggaran->jml2}} x 
                                {{$anggaran->jml3}}
                            </td>
                            <td class="tabelview" width="5%" style="text-align:center;border-right:1px solid white;">Rp</td>
                            <td class="tabelview" width="12%" style="text-align:right;padding:3px;">{{$anggaran->harga}}</td>
                            <td class="tabelview" width="5%" style="text-align:center;border-right:1px solid white;">Rp</td>
                            <td class="tabelview" width="12%" style="text-align:right;padding:3px;">{{$anggaran->total}}</td>   
                        </tr>
                    @endforeach
                    <tbody>
                </table><br>

            <li style="font-weight:bold;">Penutup</li>
                <textarea style="text-align:justify;">{{$proposal->penutup_prop}}</textarea>
        </ol>

        
    </div>
    <!-- End Isi Proposal -->
    <div class="page-break">
        <table>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">Semarang, {{ Carbon\Carbon::parse($proposal->tgltulis)->formatLocalized('%d %B %Y')}}</td>
            </tr>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">PIC</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:20px"></td>
                <td width="33,3%" style="padding:20px"></td>
                <td width="33,3%" style="padding:20px"></td>
            </tr>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$proposal->namapelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">NIP. {{$proposal->nip_pelaksana}}</td>
            </tr>
        </table>
    </div>

    <script type="text/php">
    if (isset($pdf)) {
        $pdf->page_script('
             if ($PAGE_COUNT > 2) {
                 $font = $fontMetrics->getFont("Arial", "regular");
                 $pdf->page_text(522, 770, "{PAGE_NUM}", $font, 9, array(.5,.5,.5));
            }
        ');
   }
</script>
</body>
</html>