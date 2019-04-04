<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title ?></title>
    <!-- css -->
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Data Tujuan</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#ModalTujuan">
          Tambah Jadwal
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Jadwal</th>
                  <th>Kota Tujuan</th>
                  <th>Terminal Tujuan</th>
                  <th>Jam Berangkat</th>
                  <th>Jam Sampai</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($jadwal as $row ) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['kd_jadwal']; ?></td>
                  <td><?php echo strtoupper($row['kota_tujuan']); ?></td>
                  <th><?php echo $row['terminal_tujuan']; ?></th>
                  <td><?php echo date('H:i',strtotime($row['jam_berangkat_jadwal'])); ?></td>
                  <td><?php echo date('H:i',strtotime($row['jam_tiba_jadwal'])); ?></td>
                  <td>Rp <?php echo number_format((float)($row['harga_jadwal']),0,",","."); ?>,-</td>
                  <td><a href="<?php echo base_url('backend/jadwal/viewjadwal/'.$row['kd_jadwal']) ?>" class="btn btn-primary">VIEW</a></td>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>
<!-- End of Footer -->
<!-- Modal -->
<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Tujuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>backend/jadwal/tambahjadwal" method="post">
          <div class="form-group">
            <label class="">Tujuan</label>
            <select class="form-control" name="tujuan" required>
              <option value="" selected disabled="">-Pilih Tujuan-</option>
              <?php foreach ($tujuan as $row ) {?>
              <option value="<?php echo $row['kd_tujuan'] ?>" ><?php echo strtoupper($row['kota_tujuan'])." - ".$row['terminal_tujuan']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label  class="">Bus</label>
            <select class="form-control" name="bus">
              <option value="" selected disabled="">-Pilih Bus-</option>
              <?php foreach ($bus as $row ) {?>
              <option value="<?php echo $row['kd_bus'] ?>" ><?php echo strtoupper($row['nama_bus']); ?> -<?php if ($row['status_bus'] == '1') { ?>
                Online
                <?php } else { ?>
                Offline
              <?php } ?>- </option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label  class="">Jam Berangkat</label>
            <input type="text" class="form-control"  id="timepicker" name="berangkat" required="" placeholder="Jam Berangkat">
          </div>
          <div class="form-group">
            <label  class="">Jam Tiba</label>
            <input type="text" class="form-control"  id="timepicker1" name="tiba" required="" placeholder="Jam Tiba">
          </div>
          <div class="form-group">
            <label  class="">Harga Jadwal</label>
            <input type="number" class="form-control" id="harga" name="harga" required="" placeholder="Harga">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>