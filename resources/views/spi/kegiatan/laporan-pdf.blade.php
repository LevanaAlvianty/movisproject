<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan {{$laporan->id}}</title>

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
        ul{
            list-style-type:none;
            padding:0px;
            margin:0px;
            line-height:1.5em;
        }

        li{
            background-repeat:no-repeat;
            background-position:0px 5px; 
            padding-left:14px;
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
    <div class="page-break">
        <input type="text" class="kodeunit" value="{{ $laporan->proposal->kodeunit }}"><br><br><br>
        <center><img src="gambar/logopolines.jpg" alt="logopolines" width="188px" height="188px"/></center><br>
        <div class="tulisan">
            <p class="tulisan" style="font-size:16pt">LAPORAN KEGIATAN</p>
            <p class="tulisan" style="text-transform:uppercase;font-size:16pt;">{{ $laporan->proposal->judul }}</p>
        </div><br><br>

        <div class="tulisan">
            <label>Disusun Oleh : </label><br>
            <label>{{ $laporan->proposal->namapelaksana }}</label><br>
            <label>NIP. {{ $laporan->proposal->nip_pelaksana }}</label><br>
        </div><br><br>

        <div  class="tulisan">
            <label>Didanai oleh DIPA Polines Tahun {{ $laporan->proposal->thn_anggaran }}</label><br>
        </div> 
        <center><label style="font-size:14pt;line-height:1.5em;"><b>MAK</b>  : {{ $laporan->proposal->mak}}</label></center>
        <center><label style="font-size:14pt;line-height:1.5em;">Anggaran : {{ $laporan->proposal->kegiatanpo->sumber }}</label></center><br><br><br>

        <div class="tulisan">
            <label style="font-size:16pt">POLITEKNIK NEGERI SEMARANG</label><br>
            <label style="font-size:16pt">{{ $laporan->proposal->thn_anggaran }}</label><br>
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
                <td width="66%" style="text-align:justify;">{{$laporan->proposal->judul}}</td>
            </tr>
            <tr>
                <td width="3%">2. </td>
                <td width="30%">Acuan</td>
                <td width="1%"> : </td>
                <td width="66%" style="text-align:justify;">{{$laporan->proposal->dirprogutama->dirprogutama}}</td>
            </tr> 
            <tr>
                <td width="3%">3. </td>
                <td width="30%">Pembiayaan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Pagu yang diajukan</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->pagu}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. MAK</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->mak}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">c. Anggaran</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->kelang->kelompokanggaran}}</td>
                </tr>
            <tr>
                <td width="3%">4. </td>
                <td width="30%">Ketua Pelaksanaan Kegiatan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Nama</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->namapelaksana}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Jenis Kelamin</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->jk}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">c. NIP</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->nip_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">d. Jabatan Struktural</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->jab_struktural}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">e. Jabatan Fungsional</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->jab_fungsional}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">f. Unit Pelaksana</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->unit_pelaksana}}</td>
                </tr>
            <tr>
                <td width="3%">5. </td>
                <td width="30%">Pelaksanaan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Bulan</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{ Carbon\Carbon::parse($laporan->proposal->tglmulai)->formatLocalized('%B')}} s.d {{ Carbon\Carbon::parse($laporan->proposal->tglselesai)->formatLocalized('%B %Y')}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Tempat</td>
                    <td width="1%"> : </td>
                    <td width="66%">{{$laporan->proposal->tempat}}</td>
                </tr>
            <tr>
                <td width="3%">6. </td>
                <td width="30%">Target yang diharapkan</td>
            </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">a. Luaran</td>
                    <td width="1%"> : </td>
                    <td width="66%" style="text-align:justify;">{{$laporan->proposal->target_luaran}}</td>
                </tr>
                <tr>
                    <td width="3%"></td>
                    <td width="30%">b. Dampak yang timbul</td>
                    <td width="1%"> : </td>
                    <td width="66%"><textarea>{{$laporan->proposal->dampak}}</textarea></td>
                </tr>
        </table>
        <table>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">Semarang, {{ Carbon\Carbon::parse($laporan->proposal->tgltulis)->formatLocalized('%d %B %Y')}}</td>
            </tr>
            <tr>
                <td width="33,3%">Menyetujui,</td>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$laporan->proposal->jab_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">Ketua Pelaksana</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$laporan->proposal->nama_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$laporan->proposal->namapelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%">NIP. {{$laporan->proposal->nip_unitpelaksana}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">NIP. {{$laporan->proposal->nip_pelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
                <td width="33,3%" style="padding:10px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$laporan->proposal->jab_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$laporan->proposal->jab_wadir2}}</td>
            </tr>
            <tr><td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
                <td width="33,3%" style="padding:15px"></td>
            </tr>
            <tr>
                <td width="33,3%">{{$laporan->proposal->nama_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$laporan->proposal->nama_wadir2}}</td>
            </tr>
            <tr>
                <td width="33,3%">NIP. {{$laporan->proposal->nip_wadir1}}</td>
                <td width="33,3%"></td>
                <td width="33,3%">NIP. {{$laporan->proposal->nip_wadir2}}</td>
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
                <td width="34%" style="text-align:center;">{{$laporan->proposal->nama_direktur}}</td>
                <td width="33%"></td>
            </tr>
            <tr>
                <td width="33%"></td>
                <td width="34%" style="text-align:center;">NIP. {{$laporan->proposal->nip_direktur}}</td>
                <td width="33%"></td>
            </tr>
        </table>                     
    </div>
    <!-- End Halaman Pengesahan -->

    <!-- Kata Pengantar -->
    <div class="page-break">
        <p style="font-weight:bold;text-align:center">KATA PENGANTAR</p>
        <table>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">Hormat Kami, </td>
            </tr>
            <tr>
                <td width="33,3%" style="padding:20px"></td>
                <td width="33,3%" style="padding:20px"></td>
                <td width="33,3%" style="padding:20px"></td>
            </tr>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">{{$laporan->proposal->namapelaksana}}</td>
            </tr>
            <tr>
                <td width="33,3%"></td>
                <td width="33,3%"></td>
                <td width="33,3%">Ketua Panitia</td>
            </tr>
        </table>
    </div>
    <!-- End Kata Pengantar -->

     <!-- Daftar Isi -->
     <div class="page-break">
        <p style="font-weight:bold;text-align:center">DAFTAR ISI</p>
        <ul>
            <li>KATA PENGANTAR</li>
            <li>DAFTAR ISI</li>
            <li>DAFTAR LAMPIRAN</li>
            <li>BAB 1. PENDAHULUAN</li>
                <ul style="padding-left:21px;">
                    <li>1.1 Latar Belakang</li>
                    <li>1.2 Maksud dan Tujuan</li>
                </ul>
            <li>BAB 2. PELAKSANAAN KEGIATAN</li>
                <ul style="padding-left:21px;">
                    <li>2.1 Mekanisme Pelaksanaan Kegiatan</li>
                    <li>2.2 Pelaksanaan Kegiatan</li>
                    <li>2.3 Pemanfaatan Sumber Daya</li>
                </ul>
            <li>BAB 3. LUARAN YANG DICAPAI</li>
                <ul style="padding-left:21px;">
                    <li>3.1 Luaran Kegiatan (Output)</li>
                    <li>3.2 Indikator Kinerja</li>
                </ul>
            <li>BAB 4. PERMASALAHAN YANG DIHADAPI DAN PEMECAHANNYA</li>
                <ul style="padding-left:21px;">
                    <li>4.1 Permasalahan yang Dihadapi</li>
                    <li>4.2 Pemecahan yang Dilakukan</li>
                </ul>
            <li>BAB 5. PENUTUP</li>
                <ul style="padding-left:21px;">
                    <li>5.1 Kesimpulan</li>
                    <li>5.2 Rekomendasi</li>
                </ul>
            <li>LAMPIRAN</li>
            <!-- foreach nama lampiran -->
        </ul>
    </div>
    <!-- End Daftar isi -->

    <!-- Daftar Lampiran -->
    <div class="page-break">
        <p style="font-weight:bold;text-align:center">DAFTAR LAMPIRAN</p>
        <ull>
            <li>Lampiran 1 : ..................</li>
            <li>Lampiran 2 : ..................</li>
            <li>Lampiran 3 : ..................</li>
            <!-- foreach nama lampiran -->
        </ul>
    </div>
    <!-- End Daftar Lampiran -->

    <!-- Isi Laporan -->
        <!-- Pendahuluan -->
        <div class="page-break">
            <p style="font-weight:bold;text-align:center">BAB 1. PENDAHULUAN</p>
                <p style="font-weight:bold;">1.1 Latar Belakang</p>
                    <p>{{ strip_tags($laporan->proposal->latarbelakang1) }}</p>
                    <p>{{ strip_tags($laporan->proposal->latarbelakang2) }}</p>
                    <p>{{ strip_tags($laporan->proposal->latarbelakang3) }}</p>

                <p style="font-weight:bold;">1.2 Maksud dan Tujuan</p>
                    Tujuan kegiatan {{$laporan->proposal->judul}} adalah :
                    <textarea style="text-align:justify;line-height:1.5em;">{{ strip_tags($laporan->proposal->tujuan_prop) }}</textarea>
        </div>
        <!-- End Pendahuluan -->

        <!-- Pelaksanaan Kegiatan -->
         <div class="page-break">
            <p style="font-weight:bold;text-align:center">BAB 2. PELAKSANAAN KEGIATAN</p>
                <p style="font-weight:bold;">2.1 Mekanisme Pelaksanaan Kegiatan</p>
                    <textarea style="text-align:justify;line-height:1.5em;">{{ strip_tags($laporan->proposal->mekanisme_prop) }}</textarea>
                
                <p style="font-weight:bold;">2.2 Pelaksanaan Kegiatan</p>
                <p style="font-weight:bold;">2.3 Pemanfaatan Sumber Daya</p>
                    <p>Overview</p>
                    <p>Pembagian peran SDM dalam kegiatan ini diatur pada Tabel 1:</p>
                    <p style="text-align:center;">Tabel 1. Susunan Panitia</p>
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
                        @foreach ($laporan->proposal->panitiadalampos as $panitiadalampo)
                            <tr>
                                <td class="tabelview" width="7%" style="text-align:center">{{ $loop->index + 1}}</td>
                                <td class="tabelview" width="33%" style="padding:3px">{{$panitiadalampo->pegawai->nama}}</td>
                                <td class="tabelview" width="30%" style="text-align:center">{{$panitiadalampo->nip}}</td>
                                <td class="tabelview" width="20%"style="padding:3px">{{$panitiadalampo->peran}}</td>  
                            </tr>
                        @endforeach
                        <tbody>
                    </table><br>

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
                    <table class="tabelview">
                        <tbody>
                            @foreach ($laporan->proposal->panitialuarpos as $panitialuarpo)
                                <tr>
                                    <td class="tabelview" width="7%" style="text-align:center">{{ $loop->index + 1 }}</td>
                                    <td class="tabelview" width="30%" style="padding:3px">{{$panitialuarpo->nama}}</td>
                                    <td class="tabelview" width="26%" style="text-align:center">{{$panitialuarpo->nip}}</td>
                                    <td class="tabelview" width="15%" style="padding:3px">{{$panitialuarpo->npwp}}</td>  
                                    @if($panitialuarpo->cv != null)
                                        <td class="tabelview" style="text-align:center">Terlampir</td>
                                    @else
                                        <td class="tabelview" style="text-align:center">Tidak Ada</td>
                                    @endif 
                                </tr>
                           @endforeach
                        <tbody>
                    </table>
                    @endif

                    penjelasan tugas dan peran

                    overview tabel peserta

                    <p style="text-align:center;">Tabel 2. Daftar Peserta</p>
                        <table class="tabelview">
                            <tbody>
                                @foreach ($laporan->proposal->pesertapos as $pesertapo)
                                    <tr>
                                        <td class="tabelview" width="7%" style="text-align:center">{{ $loop->iteration }}</td>
                                        <td class="tabelview" width="30%" style="padding:3px">{{$pesertapo->pegawai->nama}}</td>
                                        <td class="tabelview" width="26%" style="text-align:center">{{$pesertapo->nip}}</td>
                                        <td class="tabelview" width="15%" style="padding:3px">{{$pesertapo->peran}}</td>  
                                        <td class="tabelview" width="7%" style="text-align:center">{{$pesertapo->golongan}}</td>
                                        <td class="tabelview" width="15%" style="text-align:center">{{$pesertapo->jabatan}}</td>  
                                    </tr>
                                @endforeach
                            <tbody>
                        </table>

                    overview tabel anggaraan

                    <p style="text-align:center;">Tabel 3. Biaya yang Digunakan</p>
                        <table class="tabelview">
                            <thead>
                                <tr>
                                    <th class="tabelview" style="text-align:center">No.</th>
                                    <th class="tabelview" style="text-align:center; padding:3px;">Uraian</th>
                                    <th class="tabelview" style="text-align:center">Volume</th>
                                    <th class="tabelview" style="text-align:center" colspan="2">Harga Satuan</th>
                                    <th class="tabelview" style="text-align:center" colspan="2">Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($laporan->proposal->anggaranpos as $anggaran)
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
                        </table>

        </div>
        <!-- End Pelaksanaan Kegiatan -->

        <!-- Luaran yang Dicapai -->
        <div class="page-break">
            <p style="font-weight:bold;text-align:center">BAB 3. LUARAN YANG DICAPAI</p>
                <p style="font-weight:bold;">3.1 Luaran Kegiatan (Output)</p>
                <p style="font-weight:bold;">3.2 Indikator Kinerja</p>
        </div>
        <!-- End Luaran yang Dicapai -->

        <!-- Permasalahan -->
        <div class="page-break">
            <p style="font-weight:bold;text-align:center">BAB 4. PERMASALAHAN YANG DIHADAPI DAN PEMECAHANNYA</p>
                <p style="font-weight:bold;">4.1 Permasalahan yang Dihadapi</p>
                <p style="font-weight:bold;">4.2 Pemecahan yang Dilakukan</p>
        </div>
        <!-- End Permasalahan -->

        <!-- Penutup -->
        <div class="page-break">
            <p style="font-weight:bold;text-align:center">BAB 5. PENUTUP</p>
                <p style="font-weight:bold;">5.1 Kesimpulan</p>
                <p style="font-weight:bold;">5.2 Rekomendasi</p>
            
            <div>
                <table>
                    <tr>
                        <td width="33,3%"></td>
                        <td width="33,3%"></td>
                        <td width="33,3%">Semarang, {{ Carbon\Carbon::parse($laporan->proposal->tgltulis)->formatLocalized('%d %B %Y')}}</td>
                    </tr>ganti tanggal penulisan laporan
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
                        <td width="33,3%">{{$laporan->proposal->namapelaksana}}</td>
                    </tr>
                    <tr>
                        <td width="33,3%"></td>
                        <td width="33,3%"></td>
                        <td width="33,3%">NIP. {{$laporan->proposal->nip_pelaksana}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- End Penutup -->

        <!-- Lampiran -->
        <div>
            <p style="font-weight:bold;text-align:center">LAMPIRAN</p>
        </div>
        <!-- End Lampiran -->
    <!-- End Isi Laporan -->

    <script type="text/php">
    if (isset($pdf)) {
        $pdf->page_script
        ('
            if ($PAGE_NUM > 5) {
                $font = $fontMetrics->getFont("Arial", "regular");
                $current_page = $PAGE_NUM-5;
                $total_pages = $PAGE_COUNT-5;
                $pdf->text(300, 750, "$current_page", $font, 11, array(0,0,0));
            }
        ');
    }
    </script>
</body>
</html>