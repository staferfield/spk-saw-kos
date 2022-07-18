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

            <?php foreach ($saw as $x => $data) { ?>
                <?php if($data->alternatif_id == $alt->id){
                  ?>
                <td><?= $data->nilai_normal ?></td>
                <?php }; ?>
            <?php } ?>
          </tr>
          <?php
          // }
         } ?>
        </tbody>
      </table>





      <br>

<h3>Data Terbobotkan</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>

      <?php foreach ($kriteria as $key => $k) { ?>
      <th><?= $k->nama ?></th>
      <?php }; ?>
      <th>Total Bobot</th>
    </tr>
  </thead>

  <tbody>
  <?php
    foreach ($alternatif as $index => $alt) {
      ?>
    <tr>
      <td><?php echo $index+1 ?></td>
      <td><?= $alt->nama ?></td>

      <?php foreach ($saw as $x => $data) { ?>
          <?php if($data->alternatif_id == $alt->id){
            ?>
          <td><?= $data->nilai_bobot ?></td>
          <?php }; ?>
      <?php } ?>
      <td><?= $ranking[$index]->total_bobot ?></td>
    </tr>
    <?php
    // }
   } ?>
  </tbody>
</table>







<br>

<h3>Data Terangking</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Rangking</th>
      <th>Nama</th>
      <th>Total Bobot</th>
    </tr>
  </thead>

  <tbody>
  <?php
    foreach ($ranking as $index => $data) {
      ?>
    <tr>
      <td><?php echo $index+1 ?></td>
      <td><?= $data->alternatif_nama ?></td>
      <td><?= $data->total_bobot ?></td>
    </tr>
    <?php
   } ?>
  </tbody>
</table>


