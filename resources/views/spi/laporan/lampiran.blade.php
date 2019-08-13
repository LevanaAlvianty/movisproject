<h2 class="text-center my-5">Lampiran</h2>
	<label for="">Inputkan file dalam bentuk PDF untuk masing-masing kategori lampiran di bawah ini</label><br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
			<tbody>
				<tr>
					<td width="50%">Foto-foto Pelaksanaan</td>
					<td width="50%">
						<input name="foto_laporan_hidden" type="hidden" value="{{$laporan->foto_laporan}}" />
                                <label>{{$laporan->foto_laporan}}</label><br>
						<input type="file" name="foto_laporan" class="btn btn-small btn-default" id="foto_laporan">
					</td>
				</tr>
				<tr>
					<td width="50%">Surat Keputusan</td>
					<td width="50%">
						<input name="surat_laporan_hidden" type="hidden" value="{{$laporan->surat_laporan}}" />
                            <label>{{$laporan->surat_laporan}}</label><br>
						<input type="file" name="surat_laporan" class="btn btn-small btn-default" id="surat_laporan">
					</td>
				</tr>
				<tr>
					<td width="50%">Materi kegiatan(dokumentasi desain, dokumen hasil loka karya, dll)</td>
					<td width="50%">
						<input name="materi_laporan_hidden" type="hidden" value="{{$laporan->materi_laporan}}" />
                            <label>{{$laporan->materi_laporan}}</label><br>
						<input type="file" name="materi_laporan" class="btn btn-small btn-default" id="materi_laporan">
					</td>
				</tr>
				<tr>
					<td width="50%">Luaran Kegiatan (buku/dokumen/moduk/sertifikat/jobsheet/produk lain)</td>
					<td width="50%">
						<input name="luaran_laporan_hidden" type="hidden" value="{{$laporan->luaran_laporan}}" />
                            <label>{{$laporan->luaran_laporan}}</label><br>
						<input type="file" name="luaran_laporan" class="btn btn-small btn-default" id="luaran_laporan">
					</td>
					</tr>
				<tr>
					<td width="50%">Berita acara serah terima barang/jasa (<b>jika ada</b>)</td>
					<td width="50%">
						<input name="berita_laporan_hidden" type="hidden" value="{{$laporan->berita_laporan}}" />
                            <label>{{$laporan->berita_laporan}}</label><br>
						<input type="file" name="berita_laporan" class="btn btn-small btn-default" id="berita_laporan">
					</td>
				</tr>
			</tbody>
		</table>
    </div>

@push('js')
<script>
</script> 
@endpush()