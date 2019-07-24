
<div class="row justify-content-end">
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-sm mr-sm-2" id="kodeunit" name="kodeunit" placeholder="Masukkan Kode Unit" value="{{$kegiatan->kode}}">
    </div>
</div><br><br>

                        
<img src="{{asset('gambar/logopolines.jpg')}}" alt="logopolines" class="mx-auto d-block" width="20%" height="auto" /><br>

<div><p style="text-align:center"><b>USUL KEGIATAN</b></p></div>

<div class="row justify-content-center">
    <div class="col-sm-6 mb-2">
        <input type="text" class="form-control form-control-sm" id="judulprop" name="judulprop" placeholder="Masukkan Judul Kegiatan" value="{{$kegiatan->nama_kegiatan}}">
    </div>
</div><br><br>

<div class="row justify-content-center">
    <div class="col-sm-6 mb-2 mr-sm-2 ml-sm-2">
        <input type="text" class="form-control form-control-sm" id="ketuplak" name="ketuplak" placeholder="Nama Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nama}}">
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class=""><b>NIP.</b></label>
    </div>
    <div class="col-sm-5 mb-2">
        <input type="text" class="form-control form-control-sm" id="nip" name="nip_pelaksana" placeholder="NIP" value="{{Auth::guard('pegawai')->user()->nip}}">
    </div>
</div><br><br>

<h6 style="text-align:center"><b>Didanai oleh DIPA Polines Tahun 2019</b></h6>
                        
<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class="mr-sm-3"><b>MAK</b></label>
    </div>
    <div class="col-sm-6 mb-2">
        <input type="text" class="form-control form-control-sm" id="mak" name="mak" placeholder="MAK" value="{{$proposal->mak}}">
    </div>
</div>

<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3">Anggaran : </label>
        <select class="custom-select custom-select-sm" id="kelanggaran" name="kelang" placeholder="Pilih Kelompok Anggaran"> 
            <option class="active">RM/BOPTN/PNBP</option>
            @foreach($kelang as $kel)
                <option value="{{ $kel->id_kelang}}"
                    @if($kel->id_kelang == $proposal->id_kelang )
                        selected
                    @endif>               
                        {{ $kel->kelompokanggaran }}
                </option>
            @endforeach
        </select>
     </div>
</div><br><br>

<h6 style="text-align:center"><b>POLITEKNIK NEGERI SEMARANG</b></h6>
<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3"><b>TAHUN</b></label>
        <input style="width:85px;" type="text" class="form-control form-control-sm" id="tahunang" name="tahun" placeholder="Tahun" value="{{$proposal->thn_anggaran}}">
    </div>
</div>

@push('js')

@endpush()
                       
