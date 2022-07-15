<?php
$this->load->view('v_main/header');
?>

<h3>Edit Data Kos</h3>


          <form action="<?php echo site_url('kos/editAction'); ?>" method="post">

          <input type="hidden" name="id" required="required" value="<?= $kos->id ?>" />

            <p>Nama Kos</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="<?= $kos->nama ?>" maxlength="50" />

            <?php $j=0; ?>
            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan;?></p>
            <input type="number" name="kriteria_1" required="required" value="<?= $kos->k1 ?>" min="0" max="<?= $kriteria->row($j)->max; $j+=1 ?>" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; ?></p>
            <input type="number" name="kriteria_2" required="required" value="<?= $kos->k2 ?>" min="0" max="<?= $kriteria->row($j)->max; $j+=1 ?>" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; ?></p>
            <input type="number" name="kriteria_3" required="required" value="<?= $kos->k3 ?>" min="0" max="<?= $kriteria->row($j)->max; $j+=1 ?>" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; ?></p>
            <input type="number" name="kriteria_4" required="required" value="<?= $kos->k4 ?>" min="0" max="<?= $kriteria->row($j)->max; $j+=1 ?>" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; ?></p>
            <input type="number" name="kriteria_5" required="required" value="<?= $kos->k5 ?>" min="0" max="<?= $kriteria->row($j)->max; $j+=1 ?>" />


            <button id="submit" type="submit" class="btn btn-success btn-block">Simpan</button>
            <!-- <button id="cancel" type="cancel" class="btn btn-success btn-block">Batal</button> -->

          </form>






<?php
$this->load->view('v_main/footer');
?>