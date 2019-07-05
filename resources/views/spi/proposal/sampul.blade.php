<div class="row justify-content-end">
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-sm mr-sm-2" id="kodeunit" placeholder="Masukkan Kode Unit">
    </div>
</div><br><br>
                        
<img src="{{asset('gambar/logopolines.jpg')}}" alt="logopolines" class="mx-auto d-block" width="20%" height="auto" /><br>

<div><p style="text-align:center"><b>USUL KEGIATAN</b></p></div>

<div class="row justify-content-center">
    <div class="col-sm-6 mb-2">
        <input type="text" class="form-control form-control-sm" id="judulprop" placeholder="Masukkan Judul Kegiatan">
    </div>
</div><br><br>

<div class="row justify-content-center">
    <div class="col-sm-6 mb-2 mr-sm-2 ml-sm-2">
        <input type="text" class="form-control form-control-sm" id="ketuplak" placeholder="Nama Ketua Pelaksana">
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class=""><b>NIP.</b></label>
    </div>
    <div class="col-sm-5 mb-2">
        <input type="text" class="form-control form-control-sm" id="nip" placeholder="NIP">
    </div>
</div><br><br>

<h6 style="text-align:center"><b>Didanai oleh DIPA Polines Tahun 2019</b></h6>
                        
<div class="row justify-content-center">
    <div class="col-sm-1 mb-2">
        <label for="" class="mr-sm-3"><b>MAK</b></label>
    </div>
    <div class="col-sm-6 mb-2">
        <input type="text" class="form-control form-control-sm" id="mak" placeholder="MAK">
    </div>
</div>

<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3">Anggaran : </label>
        <select class="custom-select custom-select-sm" id="kelanggaran">
            <option class="active">Pilih Salah Satu...</option>
            @foreach($anggaran as $a)
                <option value="{{ $a->id_kelang}}"> {{ $a->kelompokanggaran }}</option>
            @endforeach -->/option>
        </select>
     </div>
</div><br><br>

<h6 style="text-align:center"><b>POLITEKNIK NEGERI SEMARANG</b></h6>
<div class="row justify-content-end">
    <div class="form-inline mx-auto">
        <label for="formGroupExampleInput" class="mr-sm-3"><b>TAHUN</b></label>
        <?php
            $thn_skr = date('Y');
        ?>
        <input style="width:85px;" type="text" class="form-control form-control-sm" id="tahunang" value="<?php echo $thn_skr ?>" placeholder="Tahun" disabled>
    </div>
</div>

@push('js')
<script>

    //kodeunit
    $( "#kodeunit" ).autocomplete({
        minLength: 1,
        source: function(request, response) {
            $.getJSON("/kodeunit", {
                name: request.term,
            }, function(data) {
                response(data);
            });
        },
        focus: function(event, ui) {
            event.preventDefault();
            return false;
        },
        select: function(event, ui) {
            event.preventDefault();
            $('#kodeunit').val(ui.item.value);
        }
    });  

    //ketuapelaksana
    $('#ketuplak').autocomplete({
        source: "/ketuapelaksana",
        minLength: 2,
        focus: function(event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
            return false;
        },
        select: function(event, ui) {
            // prevent autocomplete from updating the textbox
            event.preventDefault();
 
            $('#ketuplak').val(ui.item.label);
            $('#nip').val(ui.item.value);
            return false;
        }
    });

</script>
@endpush()
                       
