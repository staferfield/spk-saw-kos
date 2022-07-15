<?php
$this->load->view('v_main/header');
?>

<h3>Tambah Data Kos</h3>


          <form action="<?php echo site_url('kos/addAction'); ?>" method="post">

            <p>Nama Kos</p>
            <input type="text" name="nama" placeholder="Nama" required="required" value="" maxlength="50" />

            <?php $j=0; ?>
            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; $j+=1 ?></p>
            <input type="number" name="kriteria_1" required="required" value="0" min="0" max="5" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; $j+=1 ?></p>
            <input type="number" name="kriteria_2" required="required" value="0" min="0" max="5" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; $j+=1 ?></p>
            <input type="number" name="kriteria_3" required="required" value="0" min="0" max="999999" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; $j+=1 ?></p>
            <input type="number" name="kriteria_4" required="required" value="0" min="0" max="999999" />

            <p><?= $kriteria->row($j)->nama ?></p>
            <p><?= $kriteria->row($j)->keterangan; $j+=1 ?></p>
            <input type="number" name="kriteria_5" required="required" value="0" min="0" max="5" />


            <butto type="submit" class="btn btn-success btn-block">Simpan Data</butto>
            <!-- <button id="cancel" type="cancel" class="btn btn-success btn-block">Batal</button> -->

          </form>






<?php
$this->load->view('v_main/footer');
?>