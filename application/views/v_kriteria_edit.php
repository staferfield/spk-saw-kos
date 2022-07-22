<?php
$this->load->view('v_main/header');
?>

<h3>Edit Kriteria</h3>


          <form action="<?php echo site_url('kriteria/editAction'); ?>" method="post">

          <input type="hidden" name="id" required="required" value="<?= $kriteria->id ?>" />

            <p>Nama Kriteria</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="<?= $kriteria->nama ?>" maxlength="30" />

            <p>Keterangan</p>
            <textarea name="keterangan" rows="10" cols="30"  maxlength="100" ><?= $kriteria->keterangan ?></textarea>

            <p>Jenis</p>
            <p>Pilih "Benefit" apabila semakin tinggi nilainya semakin baik. Sebaliknya, pilih "Cost" apabila semakin rendah nilainya semakin baik.</p>
            <input type="text" name="jenis" required="required" value="<?= $kriteria->jenis ?>" />
            <select name="jenis">
              <option value="Benefit" <?php if($kriteria->jenis == "Benefit"){echo 'selected="selected"';} ?>>Benefit</option>
              <option value="Cost" <?php if($kriteria->jenis == "Cost"){echo 'selected="selected"';} ?>>Cost</option>
            </select>

            <p>Bobot</p>
            <input type="number" name="bobot" required="required" value="<?= $kriteria->bobot ?>" min="0" max="999"/>

            <p>Skala Maksimal</p>
            <input type="number" name="max" required="required" value="<?= $kriteria->max ?>"  min="0"  max="99999999999"/>


            <button id="submit" type="submit" class="btn btn-success btn-block">Simpan</button>
            <a href="<?php echo site_url('kriteria') ?>"><button id="cancel" type="button" class="btn btn-success btn-block">Batal</button></a>

          </form>






<?php
$this->load->view('v_main/footer');
?>