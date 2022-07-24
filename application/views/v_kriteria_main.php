
  <div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
    <span class="me-3 text-center"> <i class="bi bi-sliders" style="font-size: 1.5rem;"></i> </span>
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Kriteria</h1>
      <small>Kriteria yang digunakan dalam pemilihan kos</small>
    </div>
  </div>

  <div class="my-3 p-3 rounded shadow-sm">
    <div class="d-flex pt-3">
    <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Jenis</th>
            <th>Bobot</th>
            <th>Skala Maksimal</th>
            <th>Ubah</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($kriteria as $index => $data) { ?>
          <tr>
            <td><?php echo $index+1 ?></td>
            <td class="text-start"><?= $data->nama ?></td>
            <td class="text-start"><?= $data->keterangan ?></td>
            <td><?= $data->jenis ?></td>
            <td><?= $data->bobot ?></td>
            <td><?= $data->max ?></td>

            <td><a href="<?php echo site_url('kriteria/edit/'.$data->id); ?>"> <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</button> </a></td>
            <td><a href="<?php echo site_url('kriteria/delete/'.$data->id); ?>"> <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i> Hapus</button> </a></td>
          </tr>
          <?php
        } ?>
        </tbody>
      </table>
  </div>
    <div class="d-block text-end mt-3">
      <a href="<?php echo site_url('kriteria/add/'); ?>"><button class="btn btn-success">Tambah Kriteria</button></a>
    </div>
  </div>




