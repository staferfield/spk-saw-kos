
  <div class="d-flex align-items-center p-3 my-3 text-white bg-dark rounded shadow-sm">
    <span class="me-3 text-center"> <i class="bi bi-calculator-fill" style="font-size: 1.5rem;"></i> </span>
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Perhitungan SAW</h1>
      <small>Hasil perhitungan menggunakan metode SAW</small>
    </div>
  </div>

  <div class="card my-3">
    <div class="card-header pt-3">
      <h6>Data Awal</h6>
    </div>
    <div class="card-body pt-3">
      <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
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
              <td><?php echo $index + 1 ?></td>
              <td class="text-start"><?= $alt->nama ?></td>

              <?php foreach ($nilai as $x => $data) { ?>
                <?php if ($data->alternatif_id == $alt->id) {
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
      </div>
  </div>

  <div class="card my-3">
    <div class="card-header pt-3">
      <h6>Data Normalisasi</h6>
    </div>
    <div class="card-body pt-3">
      <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
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
              <td><?php echo $index + 1 ?></td>
              <td class="text-start"><?= $alt->nama ?></td>

              <?php foreach ($saw as $x => $data) { ?>
                <?php if ($data->alternatif_id == $alt->id) {
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
    </div>
  </div>

  <div class="card my-3">
    <div class="card-header pt-3">
      <h6>Data Terbobotkan</h6>
    </div>
    <div class="card-body pt-3">
      <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
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
              <td><?php echo $index + 1 ?></td>
              <td class="text-start"><?= $alt->nama ?></td>

              <?php foreach ($saw as $x => $data) { ?>
                <?php if ($data->alternatif_id == $alt->id) {
                ?>
                  <td><?= $data->nilai_bobot ?></td>
                <?php } ?>
              <?php } ?>
              <?php foreach ($ranking as $x => $data) { ?>
                <?php if ($alt->id == $data->alternatif_id) {
                ?>
                  <td><?= $data->total_bobot ?></td>
                <?php break;}; ?>
              <?php } ?>
            </tr>
          <?php
            // }
          } ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card my-3">
    <div class="card-header pt-3">
      <h6>Data Terangking</h6>
    </div>
    <div class="card-body pt-3">
      <table class="table table-responsive table-hover text-center">
        <thead class="text-uppercase text-secondary">
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
            <tr <?php if ($index == 0) { echo 'class="table-success"';}?>>
              <td><?php echo $index + 1 ?></td>
              <td class="text-start"><?= $data->alternatif_nama ?></td>
              <td><?= $data->total_bobot ?></td>
            </tr>
          <?php
          } ?>
        </tbody>
      </table>
    </div>
  </div>

    <div class="pt-3 alert alert-success rounded shadow">
      <h3>Kesimpulan</h3>
      <p>Jadi dapat disimpulkan bahwa Kos yang terpilih menggunakan metode SAW adalah <b><?= $ranking[0]->alternatif_nama ?></b> dengan nilai bobot sebesar <b><?= $ranking[0]->total_bobot ?></b>.</p>
    </div>
