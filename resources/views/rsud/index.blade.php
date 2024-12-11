@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-secondary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="users"></i></div>
                    <div class="media-body">
                        <span class="m-0">Jumlah Karyawan</span>
                        <h4 class="mb-0 counter">2659</h4>
                        <i class="icon-bg" data-feather="users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                    <div class="media-body">
                        <span class="m-0">Jumlah Obat</span>
                        <h4 class="mb-0 counter">14256</h4>
                        <i class="icon-bg" data-feather="shopping-bag"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="user"></i></div>
                    <div class="media-body">
                        <span class="m-0">Jumlah Dokter</span>
                        <h4 class="mb-0 counter">63</h4>
                        <i class="icon-bg" data-feather="user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden border-0">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                    <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                    <div class="media-body">
                        <span class="m-0">Total Kunjungan</span>
                        <h4 class="mb-0 counter">6331</h4>
                        <i class="icon-bg" data-feather="user-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>List Antrian</h5><span>List antrian diambil dari REST API SISDA bagian aplikasi SIMRES.</span> <span>Agar lebih mudah, gunakan fasilitas filter untuk mencari data. Klik tombol Detail untuk melihat lebih detail.</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Antrian</th>
                        <th>NIK</th>
                        <th>Tujuan</th>
                        <th>Nama Pasien</th>
                        <th>Desa</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td style="text-transform: uppercase;">J0081</td>
                        <td>8204100978000003</td>
                        <td>Poli Gigi</td>
                        <td>Erwin Wijaya</td>
                        <td>Tomori</td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Detail</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td style="text-transform: uppercase;">JI093</td>
                        <td>8204888978300001</td>
                        <td>Poli Anak</td>
                        <td>Nurbaya</td>
                        <td>Babang</td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Detail</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td style="text-transform: uppercase;">Yt003</td>
                        <td>8204120391000001</td>
                        <td>Poli Gigi</td>
                        <td>Marwa Umar</td>
                        <td>Hidayat</td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Detail</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td style="text-transform: uppercase;">Xi881</td>
                        <td>82041308910000004</td>
                        <td>Poli Gigi</td>
                        <td>Josua Hamit</td>
                        <td>Labuha</td>
                        <td>
                          {{-- <button class="btn btn-success btn-sm">Tindak Lanjuti</button> --}}
                          <button class="btn btn-danger btn-sm">Detail</button>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
</div>
</div><!-- Container-fluid Ends-->

@endsection
