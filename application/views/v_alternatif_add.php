<?php
$this->load->view('v_main/header');
?>

<h3>Tambah Data Alternatif</h3>


          <form action="<?php echo site_url('alternatif/addAction'); ?>" method="post">

            <p>Nama Alternatif</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="" maxlength="50" />

            <?php foreach ($kriteria as $index => $cr) { ?>
              <p><?= $cr->nama ?></p>
              <p><?= $cr->keterangan; ?></p>
              <input type="number" name="<?= $cr->id; ?>" required="required" value="0" min="0" max="<?= $cr->max; ?>" />
            <?php } ?>


            <button type="submit" class="btn btn-success btn-block">Tambah Alternatif</button>
            <a href="<?php echo site_url('alternatif') ?>"><button id="cancel" type="button" class="btn btn-success btn-block">Batal</button></a>

          </form>

<?php
$this->load->view('v_main/footer');
?>