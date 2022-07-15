<?php
$this->load->view('v_main/header');
?>






<div class="container">
  <h3>Tabel Data Kos</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>

            <?php $j=0; ?>
            <th><?= $kriteria->row($j)->nama; $j+=1 ?></th>
            <th><?= $kriteria->row($j)->nama; $j+=1 ?></th>
            <th><?= $kriteria->row($j)->nama; $j+=1 ?></th>
            <th><?= $kriteria->row($j)->nama; $j+=1 ?></th>
            <th><?= $kriteria->row($j)->nama; $j+=1 ?></th>
             <th>Ubah</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php $j = 0;
        foreach ($kos as $data) { ?>
          <tr>
            <td><?php echo $j+1 ?></td>

            <td><?= $data->nama ?></td>
            <td><?= $data->k1 ?></td>
            <td><?= $data->k2 ?></td>
            <td><?= $data->k3 ?></td>
            <td><?= $data->k4 ?></td>
            <td><?= $data->k5 ?></td>

            <td><a href="<?php echo site_url('kos/edit/'.$data->id); ?>"> Edit </a></td>
            <td><a href="<?php //echo site_url('kos/delete/'.$data->id); ?>"> Hapus </a></td>
          </tr>
          <?php $j+=1;
        } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>












<?php
$this->load->view('v_main/footer');
?>





