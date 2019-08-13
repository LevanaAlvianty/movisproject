<h5 style="text-align:center"><b>DAFTAR LAMPIRAN</b></h5><br>
<div class="row justify-content-between">
    <div class="col-sm-12">
        <div>    
            <div>
                <p style="text-align:justify">
                    Nama dokumen lampiran berbentuk PDF dapat diisikan pada form di bawah ini :
                </p>
            </div><br>

            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="" class="">Foto-foto pelaksanaan :</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm mr-sm-2" id="foto" disabled>
                </div>
                <div class="col-sm-2">
                    <input type="button"  class="btn btn-danger" value="Hapus" onclick="javascript:eraseText();" disabled>
                </div>
            </div><br>

            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="" class="">Surat Keputusan Panitia Pelaksana Kegiatan :</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm mr-sm-2" id="surat" disabled>
                </div>
                <div class="col-sm-2">
                    <input type="button"  class="btn btn-danger" value="Hapus" onclick="javascript:eraseText();" disabled>
                </div>
            </div><br>

            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="" class="">Materi Kegiatan :</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm mr-sm-2" id="materi" disabled>
                </div>
                <div class="col-sm-2">
                    <input type="button"  class="btn btn-danger" value="Hapus" onclick="javascript:eraseText();" disabled>
                </div>
            </div><br>

            <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <label for="" class="">Luaran Kegiatan :</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm mr-sm-2" id="luaran" disabled >
                    </div>
                    <div class="col-sm-2">
                        <input type="button"  class="btn btn-danger" value="Hapus" onclick="javascript:eraseText();" disabled>
                    </div>
            </div><br>

            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <label for="" class="">Berita acara serah terima barang/jasa (jika ada) :</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm mr-sm-2" id="berita" disabled>
                </div>
                <div class="col-sm-2">
                    <input type="button"  class="btn btn-danger" value="Hapus" onclick="javascript:eraseText();" disabled>
                </div>
            </div><br>
        </div>
    </div>
</div>
                            
@push('js')
<script>
function eraseText() {
     document.getElementById("foto").value = "";
     document.getElementById("surat").value = "";
     document.getElementById("materi").value = "";
     document.getElementById("berita").value = "";
     document.getElementById("luaran").value = "";
	}
</script>
@endpush()
                        
                        
                  
                        
                       