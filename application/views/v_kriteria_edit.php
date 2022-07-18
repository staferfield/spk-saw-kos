<?php
$this->load->view('v_main/header');
?>

<h3>Edit Kriteria</h3>


          <form action="<?php echo site_url('kriteria/editAction'); ?>" method="post">

          <input type="hidden" name="id" required="required" value="<?= $kriteria->id ?>" />

            <p>Nama Kriteria</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="<?= $kriteria->nama ?>" maxlength="50" />

            <p>Keterangan</p>
            <input type="text" name="keterangan" required="required" value="<?= $kriteria->keterangan ?>" />

            <p>Jenis</p>
            <input type="text" name="jenis" required="required" value="<?= $kriteria->jenis ?>" />

            <p>Bobot</p>
            <input type="number" name="bobot" required="required" value="<?= $kriteria->bobot ?>" min="0" />

            <p>Skala Maksimal</p>
            <input type="number" name="max" required="required" value="<?= $kriteria->max ?>"  min="0" />


            <button id="submit" type="submit" class="btn btn-success btn-block">Simpan</button>
            <!-- <button id="cancel" type="cancel" class="btn btn-success btn-block">Batal</button> -->

          </form>






<?php
$this->load->view('v_main/footer');
?>