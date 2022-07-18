<?php
$this->load->view('v_main/header');
?>






<h3>Data Awal</h3>
<table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>

            <?php foreach ($kriteria as $key => $k) { ?>
            <th><?= $k->nama ?></th>
            <?php }; ?>
          </tr>
        </thead>

        <tbody>
        <?php
          foreach ($alternatif as $index => $alt) {
            ?>
          <tr>
            <td><?php echo $index+1 ?></td>
            <td><?= $alt->nama ?></td>

            <?php foreach ($nilai as $x => $data) { ?>
                <?php if($data->alternatif_id == $alt->id){
                  ?>
                <td><?= $data->nilai ?></td>
                <?php }; ?>
            <?php } ?>
          </tr>
          <?php
          // }
         } ?>
        </tbody>
      </table>



<br>

      <h3>Data Normalisasi</h3>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>

            <?php foreach ($kriteria as $key => $k) { ?>
            <th><?= $k->nama ?></th>
            <?php }; ?>
          </tr>
        </thead>

        <tbody>
        <?php
          foreach ($alternatif as $index => $alt) {
            ?>
          <tr>
            <td><?php echo $index+1 ?></td>
            <td><?= $alt->nama ?></td>

            <?php foreach ($nilai as $x => $data) { ?>
                <?php if($data->alternatif_id == $alt->id){
                  ?>
                <td><?= $data->nilai ?></td>
                <?php }; ?>
            <?php } ?>
          </tr>
          <?php
          // }
         } ?>
        </tbody>
      </table>

