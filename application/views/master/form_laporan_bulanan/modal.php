    <?php
    if ($_SESSION['role_id'] == 1) {
        ?>
        <div class="show_error"></div>
        <div class="form-group">
            <label for="form-file">Validasi Data Ini ?</label>
        </div>
        <hr>
        <a href="<?= base_url('master/form_laporan_bulanan/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Terima</a>
        <a href="<?= base_url('master/form_laporan_bulanan/validasi_act/' . $id . '/tolak') ?>" class="btn btn-danger btn-sm btn-send">Tolak</a>
    <?php
    } else {
        ?>
        <div class="show_error"></div>
        <div class="form-group">
            <label for="form-file">Selesai Tindak Lanjut Data Ini ?</label>
        </div>
        <hr>
        <a href="<?= base_url('master/form_laporan_bulanan/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Ya</a>
        <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Tidak</button>
    <?php
    }
    ?>