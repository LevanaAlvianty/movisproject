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
            margin-top: 3cm;
            margin-bottom: 2cm;
        }

   </style>
  </head>
<body>
    <input type="text" class="form-control form-control-sm mr-sm-2" id="kodeunit" name="kodeunit" placeholder="Masukkan Kode Unit">
        <br><br><br><br><br>
            <center><img src="gambar/logopolines.jpg" alt="logopolines" width="188px" height="188px"/></center>      
        <br>

        <div><p style="text-align:center"><b>USUL KEGIATAN</b></p></div>

        <div class="row justify-content-center">
            <div class="col-sm-6 mb-2">
                <input type="text" class="form-control form-control-sm" id="judulprop" name="judulprop" placeholder="Masukkan Judul Kegiatan" >
            </div>
        </div><br><br>

        <div class="row justify-content-center">
            <div class="col-sm-6 mb-2 mr-sm-2 ml-sm-2">
                <input type="text" class="form-control form-control-sm" id="ketuplak" name="ketuplak" placeholder="Nama Ketua Pelaksana">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-1 mb-2">
                <label for="" class=""><b>NIP.</b></label>
            </div>
            <div class="col-sm-5 mb-2">
                <input type="text" class="form-control form-control-sm" id="nip" name="nip_pelaksana" placeholder="NIP">
            </div>
        </div><br><br>

        <h6 style="text-align:center"><b>Didanai oleh DIPA Polines Tahun 2019</b></h6>
                                
        <div class="row justify-content-center">
            <div class="col-sm-1 mb-2">
                <label for="" class="mr-sm-3"><b>MAK</b></label>
            </div>
            <div class="col-sm-6 mb-2">
                <input type="text" class="form-control form-control-sm" id="mak" name="mak" placeholder="MAK">
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="form-inline mx-auto">
                <label for="formGroupExampleInput" class="mr-sm-3">Anggaran : </label>
                <select class="custom-select custom-select-sm" id="kelanggaran" name="kelang"> 
                    <option class="active">Pilih Salah Satu...</option>
                </select>
            </div>
        </div><br><br>

        <h6 style="text-align:center"><b>POLITEKNIK NEGERI SEMARANG</b></h6>
        <div class="row justify-content-end">
            <div class="form-inline mx-auto">
                <label for="formGroupExampleInput" class="mr-sm-3"><b>TAHUN</b></label>
                <input style="width:85px;" type="text" class="form-control form-control-sm" id="tahunang" name="tahun" placeholder="Tahun">
            </div>
        </div>
</body>
</html>