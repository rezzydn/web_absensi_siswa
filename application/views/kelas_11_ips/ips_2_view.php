
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kelas XI  - SMAN 1 Saradan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item">Siswa</li>
              <li class="breadcrumb-item active" aria-current="page">Semua</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kelas XI IPS 2 - SMAN 1 Saradan</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="table1">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php 
                    $no = 1;
                    foreach($siswa as $row ) { ?>
                    <tbody>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama_siswa ?></td>
                        <td><?= $row->nis ?></td>
                        <td><?= $row->kelas ?></td>
                        <td><?= $row->j_kelamin ?></td>
                        <td><?= $row->alamat ?></td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">
                                QR Code
                            </a>
                        </td>
                      </tr>
                    <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->