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
                <!-- Dokumen Lampiran -->
                <td width="65%">
                    <div class="tile">
						<h2 class="text-center">Lampiran</h3><br>

						<!-- Lampiran 1 -->
						@if($laporan->foto_laporan)
							<p class="text-center">Lampiran 1. Foto-foto Pelaksanaan Kegiatan</p>
							<embed src = "{{ url('/laporan/file-foto/'.$laporan->foto_laporan) }}" type = "application/pdf" width ="100%" height ="400px" />
						@endif
						<br><hr>

						<!-- Lampiran 2 -->
						@if($laporan->surat_laporan)
							<p class="text-center">Lampiran 2. Surat Kegiatan</p>
							<embed src = "{{ url('/laporan/file-surat/'.$laporan->surat_laporan) }}" type = "application/pdf" width ="100%" height ="400px" />
						@endif
						<br><hr>

						<!-- Lampiran 3 -->
						@if($laporan->materi_laporan)
							<p class="text-center">Lampiran 3. Materi Kegiatan</p>
							<embed src = "{{ url('/laporan/file-materi/'.$laporan->materi_laporan) }}" type = "application/pdf" width ="100%" height ="400px" />
						@endif
						<br><hr>

						<!-- Lampiran 4 -->
						@if($laporan->luaran_laporan)
							<p class="text-center">Lampiran 4. Luaran Kegiatan</p>
							<embed src = "{{ url('/laporan/file-luaran/'.$laporan->luaran_laporan) }}" type = "application/pdf" width ="100%" height ="400px" />
						@endif
						<br><hr>

						<!-- Lampiran 5 -->
						@if($laporan->berita_laporan)
							<p class="text-center">Lampiran 5. Berita Acara<p>
							<embed src = "{{ url('/laporan/file-berita/'.$laporan->berita_laporan) }}" type = "application/pdf" width ="100%" height ="400px" />
						@endif
                    </div>
                </td>
                <!-- End Dokumen Lampiran -->

                <!-- Komentar Lampiran -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Lampiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
									<textarea name="r_lampiran" id="r_lampiran" cols="30" rows="10" 
										class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_lampiran}}
									</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Lampiran -->
            </tr>
        </tbody>
    </table>
</table>
