<?php
$this->load->view('v_main/header');
?>






<div class="container">
  <h3>Tabel Kriteria Pemilihan</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Jenis</th>
            <th>Bobot</th>
            <th>Skala Maksimal</th>
            <th>Ubah</th>
          </tr>
        </thead>
        <tbody>
        <?php $j = 0;
        foreach ($kriteria as $data) { ?>
          <tr>
            <td><?php echo $j+1 ?></td>

            <td><?= $data->nama ?></td>
            <td><?= $data->keterangan ?></td>
            <td><?= $data->jenis ?></td>
            <td><?= $data->bobot ?></td>
            <td><?= $data->max ?></td>

            <td><a href="<?php echo site_url('kriteria/edit/'.$data->id); ?>"> Edit </a></td>
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





