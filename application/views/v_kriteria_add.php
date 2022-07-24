<div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
  <span class="me-3 text-center"> <i class="bi bi-sliders" style="font-size: 1.5rem;"></i> </span>
  <div class="lh-1">
    <h1 class="h6 mb-0 text-white lh-1">Tambah Kriteria</h1>
    <small>Tambah kriteria untuk sistem pendukung keputusan</small>
  </div>
</div>



<div class="my-3 p-3 rounded shadow-sm">
  <div class="col">
    <form action="<?php echo site_url('kriteria/addAction'); ?>" method="post">

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="nama" class="form-label">Nama Kriteria</label>
        </div>
        <div class="col-sm-9">
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Kriteria" maxlength="30" required />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <small class="d-block text-muted">Berikan keterangan untuk kriteria.</small>
        </div>
        <div class="col-sm-9">
          <textarea name="keterangan" class="form-control" rows="5" cols="30" maxlength="100"></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="inlineRadio1" class="form-label">Jenis Kriteria</label>
          <small class="d-block text-muted">Pilih "Benefit" apabila semakin tinggi nilainya semakin baik. Sebaliknya, pilih "Cost" apabila semakin rendah nilainya semakin baik.</small>
        </div>
        <div class="col-sm-9">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Benefit" checked="checked">
            <label class="form-check-label" for="inlineRadio1">Benefit</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Cost">
            <label class="form-check-label" for="inlineRadio2">Cost</label>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="bobot" class="form-label">Bobot</label>
          <small class="d-block text-muted">Jumlah bobot yang dimiliki kriteria dibandingkan kriteria lainnya. Total keseluruhan bobot kriteria tidak harus 100.</small>
        </div>
        <div class="col-sm-9">
        <input type="number" id="bobot" name="bobot" class="form-control" required="required" value="0" min="0" max="999" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <label for="max" class="form-label">Skala Maksimal</label>
          <small class="d-block text-muted">Nilai maksimal yang dapat dimiliki oleh kriteria. Misal berikan angka 5 untuk membatasi skala dari 1 sampai 5.</small>
        </div>
        <div class="col-sm-9">
        <input type="number" id="max" name="max" class="form-control" required="required" value="0" min="0" max="99911110000" />
        </div>
      </div>

      <a href="<?php echo site_url('kriteria') ?>"><button id="cancel" type="button" class="btn btn-danger btn-sm">Batal</button></a>
      <button type="submit" class="btn btn-success btn-sm">Tambah Kriteria</button>
    </form>

  </div>
</div>
