<?php
if ($_SESSION['role_id'] == 2) {
?>
    <div class="show_error"></div>
    <div class="form-group">
        <label for="form-file">Validasi Hasil Sidang Ini ?</label>
    </div>
    <hr>
    <a href="<?= base_url('master/hasil_rapat/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Terima</a>
    <button class="btn btn-danger btn-sm btn-send" onclick="tolak(<?= $id ?>)">Tolak</button>
<?php
} else {
?>
    <div class="show_error"></div>
    <div class="form-group">
        <label for="form-file">Ajukan Hasil Sidang Ini ?</label>
    </div>
    <hr>
    <a href="<?= base_url('master/hasil_rapat/validasi_act/' . $id . '/terima') ?>" class="btn btn-primary btn-sm btn-send">Ya</a>
    <button class="btn btn-danger btn-sm btn-send" data-dismiss="modal">Tidak</button>
<?php
}
?>
<script type="text/javascript">
    function tolak(id) {
        $("#load-form").html('loading...');
        $("#modal-form").modal();
        $("#title-form").html('Validasi');
        $("#load-form").load("<?= base_url('master/hasil_rapat/validasi_tolak/') ?>" + id);
    }
</script>