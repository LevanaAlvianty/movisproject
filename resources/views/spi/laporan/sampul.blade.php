<div class="row justify-content-end">     
    <div class="col-sm-2">
    <input type="text" class="form-control form-control-sm mr-sm-2 text-center" id="kodeunit" name="kodeunit" placeholder="Kode Unit" value="{{$kegiatanpo->jurbagnitpus->kode}}">
    </div>
</div><br><br>
<img src="{{asset('gambar/logopolines.jpg')}}" alt="logopolines" class="mx-auto d-block" width="20%" height="auto"  /><br>

<div><p style="text-align:center"><b>LAPORAN KEGIATAN</b></p></div>
<div class="row justify-content-center">
    <div class="col-sm-6 mb-2"> <!-- mx-auto = untuk membuat margin otomatis ditengah (objek ditengah) -->
    <input type="text" class="form-control form-control-sm text-center" id="judul" name="judul" placeholder="Judul Laporan" value="{{$kegiatanpo->nama_kegiatan}}">
    </div>
</div><br><br>

<div class="row justify-content-center">
    <div class="col-sm-5 mb-2 mr-sm-2 ml-sm-2">
        <input type="text" class="form-control form-control-sm text-center" id="ketuplak" name="nama_pelaksana" placeholder="Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nama}}">
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class=""><b>NIP.</b></label>
    </div>
    <div class="col-sm-4 mb-2">
    <input type="text" class="form-control form-control-sm" id="nip" name="nip_pelaksana" placeholder="NIP Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nip}}">
    </div>
</div><br><br>

<h6 style="text-align:center"><b>Didanai oleh DIPA Polines Tahun {{$kegiatanpo->tahun}}</b></h6>

<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class="mr-sm-3"><b>MAK</b></label>
    </div>
    <div class="col-sm-6 mb-2">
    <input type="text" class="form-control form-control-sm" id="mak" placeholder="MAK" value="{{$proposal->mak}}">
    </div>
</div>

<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3">Anggaran : </label>
        <select class="custom-select custom-select-sm" id="kelanggaran" placeholder="Pilih Kelompok Anggaran"> 
            <option class="active">RM/BOPTN/PNBP</option>
            @foreach($kelompokanggaran as $kelang)
                <option value="{{ $kelang->id_kelang }}"
                    @if($kelang->kelompokanggaran == $kegiatanpo->sumber )
                        selected
                    @endif>               
                        {{ $kelang->kelompokanggaran }}
                </option>
            @endforeach
        </select>
     </div>
</div><br><br>

<h6 style="text-align:center"><b>POLITEKNIK NEGERI SEMARANG</b></h6>
<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3"><b>TAHUN</b></label>
    <input type="text" class="form-control form-control-sm" id="tahun" name="thn_anggaran" placeholder="Tahun" value ="{{$kegiatanpo->tahun}}" >
    </div>

</div>


