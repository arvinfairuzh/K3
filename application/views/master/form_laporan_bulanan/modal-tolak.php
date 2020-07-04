<form method="post" action="<?= base_url('master/form_laporan_bulanan/validasi_act/' . $id . '/tolak') ?>">
    <div class="show_error"></div>
    <div class="form-group">
        <p>Isi Keterangan Di bawah ini jika Menolak</p>
        <textarea name="keterangan" class="form-control"></textarea>
    </div>
    <hr>
    <button class="btn btn-primary btn-sm btn-send">Kirim</button>
    <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Batal</button>
</form>