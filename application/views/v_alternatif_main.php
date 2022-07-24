  <div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
    <span class="me-3 text-center"> <i class="bi bi-clipboard-data-fill" style="font-size: 1.5rem;"></i> </span>
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Alternatif</h1>
      <small>Data kos yang menjadi alternatif pilihan</small>
    </div>
  </div>

  <div class="my-3 p-3 rounded shadow-sm">
    <div class="d-flex pt-3">
      <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
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
              <td><?php echo $index + 1 ?></td>
              <td class="text-start"><?= $alt->nama ?></td>

              <?php foreach ($nilai as $x => $data) {
                if ($data->alternatif_id == $alt->id) {
              ?>
                  <td><?= $data->nilai ?></td>
              <?php }
              } ?>
              <td><a href="<?php echo site_url('alternatif/edit/' . $alt->id); ?>"> <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</button> </a></td>
              <td><a href="<?php echo site_url('alternatif/delete/' . $alt->id); ?>"> <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i> Hapus</button> </a></td>
            </tr>
          <?php
          } ?>
        </tbody>
      </table>

  </div>
    <div class="d-block text-end mt-3">
      <a href="<?php echo site_url('alternatif/add/'); ?>"><button class="btn btn-success">Tambah Alternatif</button></a>
    </div>
  </div>
