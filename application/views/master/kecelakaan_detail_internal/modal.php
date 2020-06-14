<div class="show_error"></div>
<?php
if ($_SESSION['role_id'] == 1) {
?>
    <div class="form-group">
        <label for="form-file">Ajukan Laporan Kecelakaan Ini ?</label>
    </div>
    <hr>
    <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Ya</a>
    <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Tidak</button>
<?php
} else if ($_SESSION['role_id'] == 3) {
?>
    <?php
    if ($_SESSION['id_bagian'] != 16) {
        if ($status_sekarang == 0) {
    ?>
            <div class="form-group">
                <label for="form-file">Validasi Laporan Kecelakaan Ini ?</label>
            </div>
            <hr>
            <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Terima</a>
        <button class="btn btn-danger btn-sm btn-send" onclick="tolak(<?= $id ?>)">Tolak</button>
        <?php
        } else {
        ?>
            <div class="form-group">
                <label for="form-file">Ajukan Tindak Lanjut Laporan Kecelakaan Ini ?</label>
            </div>
            <hr>
            <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Ya</a>
            <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Tidak</button>
        <?php
        }
    } else {
        ?>
        <div class="form-group">
            <label for="form-file">Validasi Laporan Kecelakaan Ini ?</label>
        </div>
        <hr>
        <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Terima</a>
        <button class="btn btn-danger btn-sm btn-send" onclick="tolak(<?= $id ?>)">Tolak</button>
    <?php
    }
    ?>
<?php
} else if ($_SESSION['role_id'] == 6) {
?>
    <?php
    if ($status_sekarang == 6) {
    ?>
        <div class="form-group">
            <label for="form-file">Validasi Tindak Lanjut Laporan Kecelakaan Ini ?</label>
        </div>
        <hr>
        <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Terima</a>
        <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/tolak') ?>" class="btn btn-danger btn-sm btn-send">Tolak</a>
    <?php
    } else {
    ?>
        <div class="form-group">
            <label for="form-file">Ajukan Rekomendasi Laporan Kecelakaan Ini ?</label>
        </div>
        <hr>
        <a href="<?= base_url('master/kecelakaan_detail_internal/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Ya</a>
        <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Tidak</button>
    <?php
    }
    ?>
<?php
}
?>
<script type="text/javascript">
    function tolak(id) {
        $("#load-form").html('loading...');
        $("#modal-form").modal();
        $("#title-form").html('Validasi');
        $("#load-form").load("<?= base_url('master/kecelakaan_detail_internal/validasi_tolak/') ?>" + id);
    }
</script>