<?php
$this->load->view('v_main/header');
?>

<h3>Edit Data Alternatif</h3>


          <form action="<?php echo site_url('alternatif/editAction'); ?>" method="post">

          <input type="hidden" name="id" required="required" value="<?= $alternatif->id ?>" />

            <p>Nama Alternatif</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="<?= $alternatif->nama ?>" maxlength="50" />

            <?php foreach ($kriteria as $index => $cr) { ?>
              <p><?= $cr->nama ?></p>
              <p><?= $cr->keterangan; ?></p>
              <?php foreach ($nilai as $data) {
                if ($data->kriteria_id == $cr->id) { ?>
                  <input type="number" name="<?= $cr->id; ?>" required="required" value="<?= $data->nilai; ?>" min="0" max="<?= $cr->max; ?>" />
                <?php }
              }
            } ?>
            <button id="submit" type="submit" class="btn btn-success btn-block">Simpan</button>

            <a href="<?php echo site_url('alternatif') ?>"><button id="cancel" type="button" class="btn btn-success btn-block">Batal</button></a>

          </form>






<?php
$this->load->view('v_main/footer');
?>