<div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
  <span class="me-3 text-center"> <i class="bi bi-clipboard-data-fill" style="font-size: 1.5rem;"></i> </span>
  <div class="lh-1">
    <h1 class="h6 mb-0 text-white lh-1">Edit Data Alternatif</h1>
    <small>Ubah data <?= $alternatif->nama; ?></small>
  </div>
</div>



<div class="my-3 p-3 rounded shadow-sm">
  <div class="col">
    <form action="<?php echo site_url('alternatif/editAction'); ?>" method="post">

      <input type="hidden" name="id" required="required" value="<?= $alternatif->id ?>" />

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="nama" class="form-label">Nama Kos</label>
          <small class="d-block text-muted">Nama kos yang menjadi alternatif pilihan</small>
        </div>
        <div class="col-sm-9">
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Kos" value="<?= $alternatif->nama ?>" maxlength="50" required />
        </div>
      </div>

      <?php foreach ($kriteria as $index => $cr) { ?>
        <?php foreach ($nilai as $data) {
          if ($data->kriteria_id == $cr->id) { ?>
            <div class="row mb-3">
              <div class="col-sm-3">
                <label for="<?= $cr->nama ?>" class="form-label"><?= $cr->nama ?></label>
                <small class="d-block text-muted"><?= $cr->keterangan; ?></small>
              </div>
              <div class="col-sm-9">
                <input type="number" id="<?= $cr->nama ?>" name="<?= $cr->id; ?>" class="form-control" placeholder="<?= $cr->nama ?>" value="<?= $data->nilai; ?>" min="0" max="<?= $cr->max; ?>" required />
              </div>
            </div>

      <?php }
        }
      } ?>
      <?php foreach ($kriteria as $index => $cr) { ?>
      <?php } ?>

      <a href="<?php echo site_url('alternatif') ?>"><button id="cancel" type="button" class="btn btn-danger btn-sm">Batal</button></a>
      <button type="submit" class="btn btn-success btn-sm">Simpan Data</button>
    </form>

  </div>
</div>
