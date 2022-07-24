<div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
  <span class="me-3 text-center"> <i class="bi bi-sliders" style="font-size: 1.5rem;"></i> </span>
  <div class="lh-1">
    <h1 class="h6 mb-0 text-white lh-1">Edit Kriteria</h1>
    <small>Ubah kriteria "<?= $kriteria->nama ?>"</small>
  </div>
</div>

<div class="my-3 p-3 rounded shadow-sm">
  <div class="col">
    <form action="<?php echo site_url('kriteria/editAction'); ?>" method="post">

    <input type="hidden" name="id" required="required" value="<?= $kriteria->id ?>" />
      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="nama" class="form-label">Nama Kriteria</label>
        </div>
        <div class="col-sm-9">
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Kriteria" value="<?= $kriteria->nama ?>" maxlength="30" required />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <small class="d-block text-muted">Berikan keterangan untuk kriteria.</small>
        </div>
        <div class="col-sm-9">
          <textarea name="keterangan" class="form-control" rows="5" cols="30" maxlength="100"><?= $kriteria->keterangan ?></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="jenis" class="form-label">Jenis Kriteria</label>
          <small class="d-block text-muted">Pilih "Benefit" apabila semakin tinggi nilainya semakin baik. Sebaliknya, pilih "Cost" apabila semakin rendah nilainya semakin baik.</small>
        </div>
        <div class="col-sm-9">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis" id="benefit" value="Benefit" <?php if($kriteria->jenis == "Benefit"){echo 'checked="checked"';} ?>>
            <label class="form-check-label" for="benefit">Benefit</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis" id="cost" value="Cost" <?php if($kriteria->jenis == "Cost"){echo 'checked="checked"';} ?>>
            <label class="form-check-label" for="cost">Cost</label>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="bobot" class="form-label">Bobot</label>
          <small class="d-block text-muted">Jumlah bobot yang dimiliki kriteria dibandingkan kriteria lainnya. Total keseluruhan bobot kriteria tidak harus 100.</small>
        </div>
        <div class="col-sm-9">
        <input type="number" id="bobot" name="bobot" class="form-control" required="required" value="<?= $kriteria->bobot ?>"  min="0" max="999" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="max" class="form-label">Skala Maksimal</label>
          <small class="d-block text-muted">Nilai maksimal yang dapat dimiliki oleh kriteria. Misal berikan angka 5 untuk membatasi skala dari 1 sampai 5.</small>
        </div>
        <div class="col-sm-9">
        <input type="number" id="max" name="max" class="form-control" required="required" value="<?= $kriteria->max ?>" min="0" max="99911110000" />
        </div>
      </div>

      <a href="<?php echo site_url('kriteria') ?>"><button id="cancel" type="button" class="btn btn-danger btn-sm">Batal</button></a>
      <button type="submit" class="btn btn-success btn-sm">Simpan</button>
    </form>
  </div>
</div>