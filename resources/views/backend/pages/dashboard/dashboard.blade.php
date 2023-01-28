@extends('backend.layout.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <h4>Pelaporan Progres Transaksi</h4>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Transaksi Mingguan</cite>
                </figcaption>
            </figure>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Transaksi Mingguan</p>
                    <h5 class="font-weight-bolder mb-0">
                      6 Transaksi
                      <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Menu</p>
                    <h5 class="font-weight-bolder mb-0">
                        1 Draf laporan
                      <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Pengguna</p>
                    <h5 class="font-weight-bolder mb-0">
                      10 Draf laporan
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-md-12">
                    <div id="pie"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mt-3">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
              <span class="mask"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3 table-responsive">
                <table class="table table-striped" id="table-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Draf laporan</th>
                        <th>Status laporan</th>
                        <th>Detail laporan</th>
                      </tr>
                    </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tanggapan Verifikator</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="">
                    <div class="form-group">
                        <textarea name="textarea" class="form-control text-left" id="textarea-true" cols="40" rows="10" disabled>
                          Mohon melengkapi data dukung!.
                        </textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i> Close</button>
                  <button type="button" class="btn btn-primary"><i class="fas fa-save me-2"></i> Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Formulir Laporan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="#">
                      <div class="form-group">
                          <label for="">Target Terselesaikannya Proses Harmonisasi</label>
                          <input type="text" class="form-control" placeholder="Masukan target">
                      </div>
                      <div class="form-group">
                          <label for="">Realisasi</label>
                          <input type="text" class="form-control" placeholder="Masukan realisasi">
                      </div>
                      <div class="form-group">
                          <label for="">Kendala Upaya</label>
                          <input type="text" class="form-control" placeholder="Masukan kendala upaya">

                      </div>
                  </form>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i> Close</button>
                  <button type="button" class="btn btn-primary"><i class="fas fa-save me-2"></i> Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script>
      $(() => {
        // const dataSource = [{
        //   realisasi: 'Terealisasi',
        //   val: 31,
        // }, {
        //   realisasi: 'Belum Terealisasi',
        //   val: 69,
        // }];

        // $('#pie').dxPieChart({
        //   type: 'doughnut',
        //   palette: 'Soft Pastel',
        //   dataSource,
        //   title: 'Pelaporan Progres Progsun  ',
        //   tooltip: {
        //     enabled: true,
        //     format: 'fixedPoint',
        //     customizeTooltip(arg) {
        //       console.log(arg)
        //       return {
        //         text: `${arg.valueText} Draf laporan - ${(arg.percent * 100).toFixed(2)}%`,
        //       };
        //     },
        //   },
        //   legend: {
        //     horizontalAlignment: 'right',
        //     verticalAlignment: 'top',
        //     margin: 0,
        //   },
        //   export: {
        //     enabled: true,
        //   },
        //   series: [{
        //     argumentField: 'realisasi',
        //     label: {
        //       visible: true,
        //       format: 'fixedPoint',
        //       customizeText(point) {
        //         return `${point.argumentText}: ${point.valueText}%`;
        //       },
        //       connector: {
        //         visible: true,
        //       },
        //     },
        //   }],
        // });

        $('#table-data').DataTable();
      });
    </script>
@endsection