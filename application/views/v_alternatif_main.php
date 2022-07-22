<?php
$this->load->view('v_main/header');
?>






<div class="container">
  <h3>Tabel Data Alternatif</h3>
  <div class="row">
    <div id="user-content" class="col-md-10">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <?php
          foreach ($kriteria as $cr) {
            ?>
            <th><?= $cr->nama ?></th>
            <?php } ?>
            <th>Ubah</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>

        <?php
          foreach ($alternatif as $index => $alt) {
            ?>
          <tr>
          <td><?php echo $index+1 ?></td>
            <td><?= $alt->nama ?></td>

            <?php foreach ($nilai as $x => $data) {
                  if($data->alternatif_id == $alt->id){
                  ?>
                <td><?= $data->nilai ?></td>
                <?php }
              } ?>
            <td><a href="<?php echo site_url('alternatif/edit/'.$alt->id); ?>"> Edit </a></td>
            <td><a href="<?php echo site_url('alternatif/delete/'.$alt->id); ?>"> Hapus </a></td>
          </tr>
          <?php
         } ?>

</tbody>
      </table>
    </div>
  </div>
</div>



<a href="<?php echo site_url('alternatif/add/'); ?>"><button>Tambah Alternatif</button></a>








<?php
$this->load->view('v_main/footer');
?>





