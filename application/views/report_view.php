
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Report Counting - Jl. Urip Sumoharjo</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item">Report</li>
              <li class="breadcrumb-item active" aria-current="page">Titik 1</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Report Counting - Titik 1</h6>
                </div>
                <div class="col-md-12" style="margin-bottom: 20px">
                  <div class="row">
                    <div class="col-md-6">
                      <span>Pilih dari tanggal</span>
                      <div class="input-group">
                        <input type="text" class="form-control pickdate date_range_filter" name="date_range_filter" >
                        <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <span>Sampai tanggal</span>
                      <div class="input-group">
                        <input type="text" class="form-control pickdate date_range_filter2" name="date_range_filter2">
                        <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="table1">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Motor</th>
                        <th>Mobil</th>
                        <th>Truk</th>
                        <th>Bus</th>
                        <th>Total</th>
                        <th>Volume</th>
                        <th>TPRJ</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no = 1;
                    foreach($query as $row){
                        echo "
                      <tr>
                        <td>".$no."</td>
                        <td>".$row->tanggal."</td>
                        <td>".$row->waktu."</td>
                        <td>".$row->motor."</td>
                        <td>".$row->mobil."</td>
                        <td>".$row->truk."</td>
                        <td>".$row->bus."</td>
                        <td>".$row->total."</td>
                        <td>".$row->volume."</td>
                        <td>".$row->TPRJ."</td>
                      </tr>"; $no++;
                        } 
                    ?>     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->